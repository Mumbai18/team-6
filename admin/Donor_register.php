<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "vcare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO donor_d (id,name,email,password,location,preference,phoneno)
VALUES ('$id','$name','$email','$password','$location','$preference','$phoneno)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>