<?php
  class Session {
    public function __construct() {
      if (session_id() == '') {
        session_start();
      }
    }

    public function destroy() {
      if (session_id() == '') {
        session_destroy();
      }
    }

    public function deleteAll() {
      if (session_id() == '') {
        session_unset();
      }
    }

    public function exists($key) {
      return isset($_SESSION[$key]);
    }

    public function set($key, $value) {
      $_SESSION[$key] = $value;
    }

    public function get($key, $default) {
      if ($this->exists($key)) {
        return $_SESSION[$key];
      }
      return $default;
    }
  }
?>
