<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/enum.php";

  $ResponseType = new Enum(array("Success", "Error"));
  
  class Response {
    public $type;
    public $code;
    public $message;
    public $metaDataArr;
    public $metaData;

    public function type() {
      return $this->type;
    }

    public function code() {
      return $this->code;
    }

    public function message() {
      return $this->message;
    }

    public static function Success($code, $message) {
      global $ResponseType;
      $type = $ResponseType->Success;
      return new Response($type, $code, $message);
    }

    public static function Error($code, $message) {
      global $ResponseType;
      $type = $ResponseType->Error;
      return new Response($type, $code, $message);
    }

    public function add($key, $value) {
      $this->metaDataArr[$key] = $value;   
    }

    public function commit() {
      $this->metaData = json_encode($this->metaDataArr);
    }

    private function __construct ($type, $code, $message) {
      $this->type = $type;
      $this->code = $code;
      $this->message = $message;
      $this->metaDataArr = array();
    }
  }
?>
