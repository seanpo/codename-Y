<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/relationship.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/utils.php";

  $elements = array(
    "id_one" => post("id_one", "", true),
    "id_two" => post("id_two", "", true),
    "location" => post("location")
  );

  $relationship = new Relationship($elements);
  $relationship->write();
?>
