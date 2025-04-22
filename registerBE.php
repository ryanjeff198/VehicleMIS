<?php
require_once "DBcon.php";
require_once "User"; //for USER next time

$database = new Database();
$conn = $database->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastName = trim($_POST["lasttName"]); 
    $firstName = trim($_POST["firstName"]);
    $kldMail = trim($_POST["kldMail"]);
    $password = trim($_POST["password"]);
    //condition if empty data ang nilagay ni user, hindi ito magpproceed
    if (!empty($lastName) && !empty($firstName) && !empty($kldMail) && !empty($password)) {
        $user = new User(db: $conn);
        
        if ($user->createUser(lastName: $lastName, firstName: $firstName, kldMail: $kldMail, password: $password)) {
            header("Location: login.php");
            exit();
        } else {
            echo "Registration failed. Try again.";
        }
    }
}
?>
