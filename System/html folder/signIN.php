<?php
session_start();
require_once "DBcon.php";
require_once "User.php";

$DBcon = new DBcon();
$conn = $DBcon->connect();
//for logging in
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kldEmail = trim($_POST["kldEmail"]);
    $password = trim($_POST["password"]);

    if (!empty($kldEmail) && !empty($password)) {
        $user = new User($conn);
        $loggedInUser = $user->loginUser($kldEmail, $password);

        if ($loggedInUser) {
            $_SESSION["user"] = $loggedInUser;
            header("Location: ../html folder/userdashboard.php"); // change to your success page
            exit();
        } else {
            $_SESSION["error"] = "Invalid email or password.";
            header("Location: login.php");
            exit();
        }
    }
}
?>
