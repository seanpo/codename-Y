<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/relationship.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/utils.php";

  $id = get("id", "", true);
  $callback = get("callback", "");

  $expression = new Expression("id_one", "=", $id);
  $relationshipList = Relationship::read($expression);

  function transformRelationshipToUser ($relationship) {
    $expression = new Expression("id", "=", $relationship->id_two);
    $users = Users::read($expression);
    $user = $users[0];
    $user->addProperty("location", $relationship->location);
    $user->addProperty("timestamp", $relationship->timestamp);
    return $user->toJson();
  };

  $userList = implode(",", array_map("transformRelationshipToUser", $relationshipList));
  if ($callback) {
    echo "$callback([$userList]);";
  } else {
    echo "[$userList]";
  }
?>
