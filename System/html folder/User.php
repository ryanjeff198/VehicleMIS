<?php
session_start();
class User {
    private $conn;
    private $table = "registration";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function createUser($lastName, $firstName, $kldEmail, $password): mixed {
        $checkSql = "SELECT COUNT(*) FROM " . $this->table . " WHERE kldEmail = :kldEmail";
        $checkStmt = $this->conn->prepare($checkSql);
        $checkStmt->bindParam(":kldEmail", $kldEmail);
        $checkStmt->execute();
        $emailExists = $checkStmt->fetchColumn();

        if ($emailExists > 0) {
            return false;
        }

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

    public function loginUser($kldEmail, $password): mixed {
        $sql = "SELECT * FROM " . $this->table . " WHERE kldEmail = :kldEmail LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":kldEmail", $kldEmail);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user["password"])) {
            $_SESSION["user"] = [
                "ID" => $user["ID"],
                "firstName" => $user["firstName"],
                "lastName" => $user["lastName"],
                "email" => $user["kldEmail"]
            ];
            header("Location: dashboard.php");
            exit();
        }

        return false;
    }

    // ✅ NEW METHOD: fetch all users for admin page
    public function fetchAllUsers(): array {
        $sql = "SELECT ID, firstName, lastName, kldEmail FROM " . $this->table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
