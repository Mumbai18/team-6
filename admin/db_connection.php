

<?php
$servername = "localhost";
$username = "root";
$password = "secret";
$dbname = "vcare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connection_error() .
        " (" . mysqli_connection_errno() . ")"
    );
}
?>
