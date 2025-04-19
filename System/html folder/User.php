<?php
class User {
    private $conn;
    private $table = "registration";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function createUser($lastName, $firstName, $kldEmail, $password): mixed {
        // Check if kldEmail already exists
        $checkSql = "SELECT COUNT(*) FROM " . $this->table . " WHERE kldEmail = :kldEmail";
        $checkStmt = $this->conn->prepare($checkSql);
        $checkStmt->bindParam(":kldEmail", $kldEmail);
        $checkStmt->execute();
        $emailExists = $checkStmt->fetchColumn();

        if ($emailExists > 0) {
            return false; // Email already in use
        }

        // Proceed with insert if not duplicate
        $sql = "INSERT INTO " . $this->table . " (lastName, firstName, kldEmail, password) 
                VALUES (:lastName, :firstName, :kldEmail, :password)";

        $stmt = $this->conn->prepare($sql);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt->bindParam(":lastName", $lastName);
        $stmt->bindParam(":firstName", $firstName);
        $stmt->bindParam(":kldEmail", $kldEmail);
        $stmt->bindParam(":password", $hashedPassword);

        return $stmt->execute();
    }
    //fetch data from table to login
    public function loginUser($kldEmail, $password): mixed {
        $sql = "SELECT * FROM " . $this->table . " WHERE kldEmail = :kldEmail LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":kldEmail", $kldEmail);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user["password"])) {
            return $user; // Login success
        }

        return false; // Login failed
    }
}
