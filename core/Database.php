<?php
class Database {
    private static ?Database $instance = null;
    private PDO $connexion;

    private function __construct(string $host, string $dbname, string $user, string $password){
        $this->connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    }

    public static function getInstance(string $host, string $dbname, string $user, string $password): Database {
        if (self::$instance === null) {
            self::$instance = new Database($host, $dbname, $user, $password);
        }
        return self::$instance;
    }
}