<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/relationship.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/utils.php";

  $id = get("id", "", true);

  $expression = new Expression("id_one", "=", $id);
  $relationshipList = Relationship::read($expression);

  function transformRelationshipToUser($relationship) {
    $expression = new Expression("id", "=", $relationship->id_two);
    $users = Users::read($expression);
    return $users[0]->toJson();
  }

  $userList = implode(",", array_map("transformRelationshipToUser", $relationshipList));
  echo "[$userList]";
?>
