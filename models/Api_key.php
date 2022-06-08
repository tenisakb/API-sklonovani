<?php

class Api_key {    
    private $conn;
    private $table = 'api_keys';

    public $id;
    public $api_key;
    public $is_valid;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read($api_key) {
        $stmt = $this->conn->prepare("SELECT created_at FROM $this->table WHERE api_key = :var AND is_valid = 1");
        $stmt->bindParam(':var', $api_key);
        $stmt->execute();
        return $stmt;
    }
}