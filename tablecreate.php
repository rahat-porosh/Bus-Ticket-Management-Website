<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "porosh";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE MyUsers (
    Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    Firstname VARCHAR(30) NOT NULL,
    Lastname VARCHAR(30) NOT NULL,
    Email VARCHAR(50),
    Passwrd VARCHAR(30),
    Birthdate date,
    Gender VARCHAR(10),
    reg_date TIMESTAMP
    )";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>