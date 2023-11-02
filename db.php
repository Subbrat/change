<?php
$db_server = "localhost"; // Change if your database server is different
$db_username = "root"; // Change to your MySQL username
$db_password = "Admin@123"; // Change to your MySQL password
$db_name = "elect"; // Change to your database name

$conn = new mysqli($db_server, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
