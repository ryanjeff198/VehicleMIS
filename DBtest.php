<?php
include_once 'DBcon.php'; // path to your Database.php file

$database = new DBcon();
$conn = $database->connect();

if($conn){
    echo "Database connected successfully!";
} else {
    echo "Failed to connect to Database.";
}
?>
