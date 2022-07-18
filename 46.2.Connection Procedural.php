<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create Connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully";

mysqli_close($conn);