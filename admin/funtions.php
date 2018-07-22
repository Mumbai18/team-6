<?php
require_once ("db_connection.php");
function find_donor()
{  global $conn;
$query = "SELECT * ";
$query .= "from donor_details;";
//$query .= " where admin_username = '" . $admin_username. "';";
$result_set = mysqli_query($conn, $query);
confirm_query($result_set);
//if ($admin = mysqli_fetch_assoc($result_set)) {
//return $admin;
//} else {
//return null;
    return $result_set;
}

function confirm_query($result_set) {
    if (!$result_set) {
        die("Database query failed.");
        $error = error_reporting(E_ALL);
        echo $error;
    }
}

function find_donor_by_id($id)
{  global $conn;
    $query = "SELECT * ";
    $query .= "from donor_transaction";
    $query .= " where d_id= " . $id. ";";
    $result_set = mysqli_query($conn, $query);
    confirm_query($result_set);
   /* if ($admin = mysqli_fetch_assoc($result_set)) {
        return $admin;
    } else {
        return null;
    }*/
   return $result_set;

}

function find_volunteer()
{  global $conn;
    $query = "SELECT * ";
    $query .= "from volunteer_details;";
    //$query .= " where d_id= " . $id. ";";
    $result_set = mysqli_query($conn, $query);
    confirm_query($result_set);
    /* if ($admin = mysqli_fetch_assoc($result_set)) {
         return $admin;
     } else {
         return null;
     }*/
    return $result_set;

}

function find_patients_by_vid($id)
{  global $conn;
    $query = "SELECT * ";
    $query .= "from patients";
    $query .= " where v_id= " . $id. ";";
    $result_set = mysqli_query($conn, $query);
    confirm_query($result_set);
    /* if ($admin = mysqli_fetch_assoc($result_set)) {
         return $admin;
     } else {
         return null;
     }*/
    return $result_set;

}

function find_tasks_by_vid($id)
{  global $conn;
    $query = "SELECT * ";
    $query .= "from tasks";
    $query .= " where v_id= " . $id. ";";
    $result_set = mysqli_query($conn, $query);
    confirm_query($result_set);
    /* if ($admin = mysqli_fetch_assoc($result_set)) {
         return $admin;
     } else {
         return null;
     }*/
    return $result_set;

}

function find_patients()
{  global $conn;
    $query = "SELECT * ";
    $query .= "from patients;";
    //$query .= " where d_id= " . $id. ";";
    $result_set = mysqli_query($conn, $query);
    confirm_query($result_set);
    /* if ($admin = mysqli_fetch_assoc($result_set)) {
         return $admin;
     } else {
         return null;
     }*/
    return $result_set;

}

function find_programs()
{  global $conn;
    $query = "SELECT * ";
    $query .= "from programs;";
    //$query .= " where d_id= " . $id. ";";
    $result_set = mysqli_query($conn, $query);
   // print_r($result_set);
    confirm_query($result_set);
    /* if ($admin = mysqli_fetch_assoc($result_set)) {
         return $admin;
     } else {
         return null;
     }*/
    return $result_set;

}
?>