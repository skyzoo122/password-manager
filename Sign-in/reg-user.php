<?php
require_once("../includs/conction.php");

$email = $_POST["email"];
$password = $_POST["password"];

$query = "INSERT INTO users (email, pswrd) VALUES (:email, :password)";
$stmt = $conn->prepare($query);

try {
    $stmt->execute(array(
        "email" => $email,
        "password" => $password
    ));
    echo "Your accout has been created";
    header("refresh:1;url=../Log-in/");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
