<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/utils.php";

  $elements = array(
    "guid" => uniqid("?!", true),
    "first_name" => post("first_name", "", true),
    "last_name" => post("last_name", "", true),
    "password" => post("password", "", true),
    "email" => post("email", "", true),
    "position" => post("position"),
    "company" => post("company"),
    "image" => post("image"),
    "address" => post("address"),
    "url" => post("url"),
    "phone" => post("phone"),
    "fax" => post("fax"),
    "description" => post("description")
  );

  $user =  new Users($elements);
  $id = $user->write();

  return json_encode(array("id" => $id, "guid" => $user->guid));
?>
