<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/utils.php";

  $id = get("id", "", true);
  $callback = get("callback", "");

  $expression = new Expression("id", "=", $id);
  $users = Users::read($expression);
  $user = $users[0]->toJson();

  if ($callback) {
    echo "$callback([$user]);";
  } else {
    echo "[$user]";
  }
?>
