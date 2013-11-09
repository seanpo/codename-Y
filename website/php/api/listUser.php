<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/relationship.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/utils.php";

  $id = get("id", "", true);

  $expression = new Expression("id_one", "", "");
  $userList = Relationship::read();
  $elements = array(
    "guid" => com_create_guid(),
    "first_name" => post("first_name", "", true),
    "last_name" => post("last_name", "", true),
    "email" => post("email", "", true),
    "position" => post("position"),
    "company" => post("company"),
    "address" => post("address"),
    "url" => post("url"),
    "phone" => post("phone"),
    "description" => post("description")
  );

  $user =  new Users($elements);
  $user->write();
?>
