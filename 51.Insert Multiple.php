<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo ("Connection failed" . $conn->connect_error);
}

$sql = "INSERT INTO myguests (firstname, lastname, email) VALUES
                        ('Khaira. B', 'Huzaifah', 'khaira.huzaifah@gmail.com'),
                        ('Muhammad Khairu. M', 'Huzaifah', 'khairu.huzaifah@gmail.com'),
                        ('Khairi', 'Huzaifah', 'khairi.huzaifah@gmail.com')";

if ($conn->multi_query($sql) === true) {
    echo "New records created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();