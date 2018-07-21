<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "VCASE";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// $value    = $conn->real_escape_string($_POST['value']);
$value= 7;


$query   ="SELECT  `medical_kit` FROM `inventory` where id=1";
$result = $conn->query($query);
$row=mysqli_fetch_row($result);
echo $row[0];
// $query   =" INSERT INTO `Patient`(`name`, `gender`, `hospital`, `cancer_type`, `program_type`) VALUES ($Name,$Gender,$CancerType,$Hospital ,$ProgramType))";
$query1 = "UPDATE `inventory` SET `medical_kit` = $row[0]- $value";
$result1 = $conn->query($query1);
$conn->close();
?>

</body>
</html>