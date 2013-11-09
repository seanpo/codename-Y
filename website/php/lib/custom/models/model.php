<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/conf/dbSetup.php";
  // All classes inheriting from Model must have an ID.
  class Model {
    static public $tableName;
    static public $columnList;
    static public $class;
    static private $elements;

    public function __construct($elements) {
      foreach (static::$columnList as $key) {
        if (isset($elements[$key])) {
          $this->addProperty($key, $elements[$key]);
        }
      }
    }

    static public function tableExists() {
      return in_array(static::$tableName, DB::tableList());
    }

    static public function read($expression) {
      return static::readLimit($expression, 0);
    }

    static public function readLimit($expression, $limit) {
      $limit = $limit > 0? "LIMIT ".strval($limit) : "";
      $query = "SELECT * FROM ".static::$tableName." WHERE ".$expression->toString().$limit;
      $elements = DB::query($query);
      return static::JSONToObject($elements);
    }
	
	static public function readAll() {
      $query = "SELECT * FROM ".static::$tableName;
      $elements = DB::query($query);
      return static::JSONToObject($elements);
    }

    static public function readRandom($limit) {
      $elements = DB::query("SELECT * FROM ".static::$tableName." ORDER BY RAND() LIMIT ".$limit);
      return static::JSONToObject($elements);
    }

    static public function readLatest() {
      return static::readTop(1);
    }

    static public function readEarliest() {
      return static::readBottom(1);
    }

    static public function readTop($limit) {
      $elements = DB::query("SELECT * FROM ".static::$tableName." ORDER BY id DESC LIMIT %i", $limit);
      return static::JSONToObject($elements);
    }

    static public function readBottom($limit) {
      $elements = DB::query("SELECT * FROM ".static::$tableName." ORDER BY id LIMIT %i", $limit);
      return static::JSONToObject($elements);
    }

    public function get($key, $default) {
      return isset($this->$key)? $this->$key : $default;
    }

    public function update($key, $value) {
      if ($this->isValidColumn($key)) {
        $identificationString = $this->identificationString();
        $this->addProperty($key, $value);
        DB::update(static::$tableName, $this->elements, $identificationString);
        return true;
      }
      return false;
    }

    public function write() {
      DB::insert(static::$tableName, $this->elements);
      $id = DB::insertId();
      $this->id = $id;
      return $id;
    }

    public function delete() {
      DB::delete(static::$tableName, $this->identificationString());
    }

    static public function deleteAll() {
      DB::delete(static::$tableName, "id!=%i", -1);
      return true;
    }

    static public function exists($expression) {
      $readValue = self::read($expression);
      return !empty($readValue);
    }

    private function identificationString() {
      $expression = null;
      foreach (static::$columnList as $column) {
        if (!isset($this->$column) || !$this->$column) {
          continue;
        }
        if ($expression === null) {
          $expression = new Expression($column, "=", $this->$column);
        } else {
          $expression->with($column, "=", $this->$column);
        }
      }

      if ($expression === null) {
        throw new Exception("Missing User Parameters");
      }
      return $expression->toString();
    }

    private function addProperty($key, $value) {
      $this->$key = $value;
      $this->elements[$key] = $value;
    }

    private function isValidColumn($key) {
      return in_array($key, static::$columnList);
    }

    static private function JSONToObject($elements) {
      if ($elements == null) {
        return array();
      }

      $objs = array();
      foreach ($elements as $element) {
        array_push($objs, new static::$class($element)); 
      }

      //TODO: Fix this. Just return $objs
      return count($objs) == 1? $objs[0] : $objs;
    }
  }

  class Expression {
    private $query = "";

    public function __construct($key, $operation, $value) {
      if (isset($key)) {
         $this->query = static::stringify($key, $operation, $value);
      }
    }

    public function custom($query) {
      $this->query = $this->query.$query." ";
      return $this;
    }

    public function with($key, $operation, $value) {
      if (isset($key)) {
        $with = static::stringify($key, $operation, $value);
        $this->query = $this->query."AND ".$with;
      } else {
        $this->query = $this->query."AND ";
      }
      return $this;
    }

    public function either($key, $operation, $value) {
      if (isset($key)) {
        $either = static::stringify($key, $operation, $value);
        $this->query = $this->query."OR".$either;
      } else {
        $this->query = $this->query."AND ";
      }
      return $this;
    }

    static private function stringify($key, $operation, $value) {
      $operatorValid = static::validateOperateither($operation);
      if (!$operatorValid) {
        throw new Exception("Invalid operator");
      }
      return sprintf("%s %s %s ", $key, $operation, static::getValue($value));
    }

    static private function getValue($value) {

      $str = gettype($value) === "integer" || preg_match("/^[0-9]*$/", $value) == 1 ? strval($value) : sprintf("'%s'", $value);
      return $str;
    }

    static private function validateOperateither($op) {
      return in_array($op, array("", "=", ">", "<", "<>", "<=", ">="))? $op : "=";
    }
    
    public function toString() {
      return $this->query;
    }
  }
?>
