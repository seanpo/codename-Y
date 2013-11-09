<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/utils.php";

  $email = get("email", "", true);
  $password = get("password", "", true);
  $callback = get("callback", "");

  $expression = new Expression("email", "=", $email);
  $expression->with("password", "=", $password);
  $users = Users::read($expression);

  $json = array(
    "success" => count($users)? "true": "false"
  );

  if (count($users)) {
    $json["id"] = $users[0]->id;
  }

  $json = json_encode($json);

  if ($callback) {
    echo "$callback([$json]);";
  } else {
    echo "[$json]";
  }
?>
