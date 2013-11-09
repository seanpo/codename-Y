<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/conf/config.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/model.php";

  class Relationship extends Model {
    public function __construct($elements) {
      parent::__construct($elements);
    }

    static public $class = Relationship;
    static public $tableName = "Relationship";
    static public $columnList = array(
      "id_one",
      "id_two",
      "timestamp",
      "location"
    );
  }

  if (!Relationship::tableExists()) {
    $usersSql = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/sql/RelationshipTable.sql");
    DB::query($usersSql);
  }
?>
