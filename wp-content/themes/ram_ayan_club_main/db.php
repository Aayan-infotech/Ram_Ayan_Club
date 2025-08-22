<?php
$host = "localhost";
$user = "root";        
$pass = "";          
$dbname = "ram_cyan_club"; 

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
