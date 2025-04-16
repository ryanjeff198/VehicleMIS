<?php
session_start(); // start the session

require_once "DBcon.php";
require_once "User.php";

$DBcon = new DBcon();
$conn = $DBcon->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastName = trim($_POST["lastName"]); 
    $firstName = trim($_POST["firstName"]);
    $kldEmail = trim($_POST["kldEmail"]);
    $password = trim($_POST["password"]);
    $confirmPassword = trim($_POST["confirmPassword"]); // New line

    if (!empty($lastName) && !empty($firstName) && !empty($kldEmail) && !empty($password) && !empty($confirmPassword)) {

        // Check if passwords match
        if ($password !== $confirmPassword) {
            $_SESSION["error"] = "Passwords do not match.";
            header("Location: login.php");
            exit();
        }

        $user = new User(db: $conn);

        if ($user->createUser(lastName: $lastName, firstName: $firstName, kldEmail: $kldEmail, password: $password)) {
            header("Location: login.php");
            exit();
        } else {
            $_SESSION["error"] = "Account already exist.";
            header("Location: login.php");
            exit();
        }
    }
}


?>
