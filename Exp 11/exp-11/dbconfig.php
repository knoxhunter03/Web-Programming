<?php
$servername = "localhost";
$username = "root"; //edit if you have set a username for MySQL
$password = "1234"; // edit if you have set a password
$dbname = "formexample";
// Create connection syntax
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "connection failed";
    die("Connection failed: " . $conn->connect_error);
}
?>