<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO myguests(firstname, lastname, email) VALUES ('Rachmah', 'Octarina', 'rachmah@gmail.com')";

if ($conn->query($sql) === true) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();