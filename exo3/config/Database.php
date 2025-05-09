<?php

namespace config;

use PDO;

class Database {
    private static ?Database $instance = null;
    private PDO $connection;

    private function __construct() {
        $dsn = 'mysql:host=localhost;port=8889;dbname=AnimauxDB;charset=utf8mb4';
        $user = 'root';
        $password = 'root';
        
        $this->connection = new PDO($dsn, $user, $password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance(): Database {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(): PDO {
        return $this->connection;
    }
}
