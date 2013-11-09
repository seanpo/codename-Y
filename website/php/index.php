<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/session.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/relationship.php";

  $session = new Session();

  $id = $_GET["id"];
  $expression = new Expression("id", "=",);
  $user = Users::read($expression);
?>
