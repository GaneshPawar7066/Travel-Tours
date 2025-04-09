<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
include '../connection.php'; // Include the connection file

// Use the existing connection
$db = $conn; // Reuse the connection from connection.php

    try {
        // No need to create a new PDO connection, we are using the existing $db connection


        // Insert the user into the database using mysqli
        $stmt = $db->prepare("INSERT INTO users ( username, email, password) VALUES ( ?, ?, ?)");
        $stmt->bind_param("sss",  $username, $email, $hashed_password);
        $stmt->execute();

        echo "<h2>Registration Successful</h2>";
        echo "Thank you for registering, " . $name . "!<br>";
        echo "You'll be redirected to login page in 3 seconds";
        header("refresh:3;url=login.html");
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();

    }
}
