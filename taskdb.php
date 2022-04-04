<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "flight";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
            $name=$_POST['name'];
            $pass=$_POST['pass'];
            $eml=$_POST['eml'];
            $seat=rand(1,100);
            $sql = "INSERT INTO flight_information (Name, Email_id, Passwrd,Seat_number) VALUES ('$name','$eml','$pass','$seat')";

            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            } 
    }
?>