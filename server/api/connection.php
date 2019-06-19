<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;charset=utf8;dbname=admin_fin', 'admin_fin', 'GpSc3SIZ', $pdo_options );
      }
      return self::$instance;
    }
  }
?>
