<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/conf/config.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/model.php";

  class Users extends Model {
    public function __construct($elements) {
      parent::__construct($elements);
    }

    static public $class = Users;
    static public $tableName = "Users";
    static public $columnList = array(
      "id",
      "guid",
      "first_name",
      "last_name",
      "email",
      "position",
      "company",
      "address",
      "url",
      "phone",
      "description"
    );
  }

  if (!Users::tableExists()) {
    $usersSql = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/sql/UsersTable.sql");
    DB::query($usersSql);
  }
?>
