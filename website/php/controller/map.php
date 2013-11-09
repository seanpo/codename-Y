<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/controller/baseController.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/user.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/custom/models/relationship.php";

	class Map extends BaseController {
    public $modules;

		public function __construct($userId) {
      $this->map = true;
			$this->title = "Super Handshake - Map";
      $this->userId = $userId;
      $this->setupAssets();
      $this->setupRelationships();
		}

    private function setupRelationships() {
      $func = function($relationship) {
        $expression = new Expression("id", "=", $relationship->id_two);
        $users = Users::read($expression);
        $user = $users[0];
        $user->addProperty("location", $relationship->location);
        $user->addProperty("timestamp", $relationship->timestamp);
        return $user;
      };

      $expression = new Expression("id_one", "=", $this->userId);
      $relationshipList = Relationship::read($expression);
      $this->users = array_map($func, $relationshipList);
    }

    private function setupAssets() {
			$this->addScript("/static/js/lib/utils.js")
			     ->addScript("http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0")
		       ->addScript("/static/js/lib/bingMaps.js")
			     ->addScript("/static/js/map.js")
           ->addStyle("/static/css/map.css");
    }
	}
?>
