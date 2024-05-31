<?php
    class TestController {
        public function index() {
            require_once 'core/config/databaseConfig.php';
            $db = Database::getInstance($host, $dbname, $user, $password);

            echo 'TestController index + connexion à la base de données réussie';
            

        }
    }