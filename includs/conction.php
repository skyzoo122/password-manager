<?php
$servername = "localhost";
$username = "root";
// $password = "your_password";
$password = "";
$database = "p-manager";

// Create a PDO instance
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
