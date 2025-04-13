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

    public function createUser($lastName, $firstName, $middleName, $DateBirth, $age, $sex,  $kldEmail, $password, $confirmPass, $IDnumber, $ContactNumber,): mixed {
        $sql = "INSERT INTO " . $this->table . " (lastName, firstName, middleName, DateBirth, age, kldEmail, password, IDnumber, ContactNumber) VALUES ( :lastName, :firstName, :middleName, :DateBirth, :age, :kldEmail, :password, :IDnumber, :ContactNumber);";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":lastName", $lastName);
        $stmt->bindParam(":firstName", $firstName);
        $stmt->bindParam(":middleName", $middleName);
        $stmt->bindParam(":DateBirth", $DateBirth);
        $stmt->bindParam(":age", $age);
        $stmt->bindParam(":kldEmail", $kldEmail);
        $stmt->bindParam(":password", password_hash($password, PASSWORD_DEFAULT));
        $stmt->bindParam(":password", password_hash($confirmPass, PASSWORD_DEFAULT));
        $stmt->bindParam(":IDnumber", $IDnumber);
        $stmt->bindParam(":ContactNumber", $ContactNumber);
        return $stmt->execute();
    }
    
}