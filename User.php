<?php
class User {
    private $conn;
    private $table = "registration";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getUsers(): mixed {
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser($name, $email, $password): mixed {
        $sql = "INSERT INTO " . $this->table . " (lastName, firstName, kldEmail, password) VALUES (:lastName, firstName, :kldEmail, :password)";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":lastName", $lastName);
        $stmt->bindParam(":firstName", $firstName);
        $stmt->bindParam(":kldEmail", $kldEmail);
        $stmt->bindParam(":password", password_hash($password, PASSWORD_DEFAULT));
    
        return $stmt->execute();
    }
    
}