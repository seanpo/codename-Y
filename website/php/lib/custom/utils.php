<?php
	function currPageUrl() {
		$pageURL = 'http';
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}

  function get($key, $default = "", $required = false) {
    if (!isset($_GET[$key])) {
      return notFound($default, $require);
    }
    return $_GET[$key];
  }

  function post($key, $default = "", $required = false) {
    if (!isset($_POST[$key])) {
      return notFound($default, $require);
    }
    return $_POST[$key];
  }

  function notFound($default, $required) {
    if ($required) {
      throw new Exception("key: $key, not found.");
    }
    return $default;
  }
?>
