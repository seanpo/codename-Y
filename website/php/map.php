<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/controller/map.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/utils.php";
  
  $email = get("email", "", true);
  $password = get("password", "", true);
  
  $expression = new Expression("email", "=", $email);
  $expression->with("password", "=", $password);
  $users = Users::read($expression);
  if (count($users)) {
    $map = new Map($users[0]->id);
    echo $map->render();
  }
  else {
    throw new Exception("User does not exist.");
  }
?>
