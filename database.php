<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wikiandbio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection faile d: " . mysqli_connect_error());
}
?>