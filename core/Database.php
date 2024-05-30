<?php
    class Database {
        private static $instance;
        private $connexion;

        private function __construct($host, $dbname, $user, $password) {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        }

        public static function getInstance() {
            if (!isset(self::$instance)) {
                require_once 'core/config/databaseConfig.php';
                self::$instance = new Database($host, $dbname, $user, $password);
            }
            return self::$instance;
        }
    }