<?php
require_once "DBcon.php";
require_once "User"; //for USER next time
//kulang pa to nilagay ko lang muna 
$database = new Database();
$conn = $database->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$lastName = trim($_POST["lastName"]);
$firstName = trim($_POST["firstName"]);
$middleName = trim($_POST["middleName"]);
$DateBirth = trim($_POST["DateBirth"]);
$age = trim($_POST["age"]);
$kldEmail = trim($_POST["kldEmail"]);
$password = trim($_POST["password"]);
$IDnumber = trim($_POST["IDnumber"]);
$ContactNumber = trim($_POST["ContactNumber"]);

if (
    !empty($lastName) && !empty($firstName) && !empty($middleName) &&
    !empty($DateBirth) && !empty($age) && !empty($kldEmail) &&
    !empty($password) && !empty($IDnumber) && !empty($ContactNumber)
) {
    $user = new User(db: $conn);

        
        if ($user->createUser(lastName: $lastName, firstName: $firstName, middleName: $middleName, DateBirth: $DateBirth, age: $age, kldEmail: $kldEmail, password: $password, IDnumber: $IDnumber, ContactNumber: $ContactNumber
        )) {
            header("Location: login.php");
            exit();
        } else {
            echo "Registration failed. Please try again.";
        }
    }
}
?>
