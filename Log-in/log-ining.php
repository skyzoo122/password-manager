<?php
require_once("../includs/init.php");
require_once("../includs/conction.php");

$email = $_POST["email"];
$password = $_POST["password"];

$query_result = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($query_result);

// Check if the query was successful
if ($result) {
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        $retrievedEmail = $row['email'];
        $retrievedPassword = $row['pswrd'];
    }
    if ($password === $retrievedPassword && $email === $retrievedEmail) {
        $_SESSION['user_logged'] = true;
        $_SESSION['email'] = $email;
        header("Location: ../show-passwords/");
    } else {
        echo " PASSWORD OR EMAIL YOU ENTERED IS FALSE, TRY AGAIN";
    }
} else {
    echo "email not exicet.";
}
