<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed . $conn->connect_error");
}

$sql = "UPDATE myguests SET  lastname='Huzaifah' WHERE id=2";

if ($conn->query($sql) === true) {
    echo "Record update successfully";
} else {
    echo "Error updating record: " . $conn->connect_error;
}

$conn->close();