<?php require_once ("db_connection.php");?>
<?php require_once ("funtions.php");?>
<?php


if(isset($_POST['submit']))
{
    //echo"test";
    $Query = "INSERT INTO programs(program,ranking)values( ";
    $Query .= "'" . $_POST['name'] . "', ";
    $Query .=  $_POST['ranking'] .");" ;
    //echo $Query;
    //echo $_POST["gender"];
    //$Query .= "'" . $_POST["gender"] . "' )";
    //echo $Query;
    $result = mysqli_query($conn, $Query);
}
?>