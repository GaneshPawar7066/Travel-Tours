<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "book_db";

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error); // Log connection error
    die("Connection failed: " . $conn->connect_error);
}
?>
