<?php

class Database {
    private $host = 'vip_database';
    private $db_name = 'c0apisklonovani';
    private $username = 'c0apisklonovani';
    private $password = 'g5GyRz_uyNBJ7';
    private $conn;
    
    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}