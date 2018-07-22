<?php require_once ("db_connection.php")?>
<?php

$query   ="Select * from inventory ";
$result = $conn->query($query);
$row=mysqli_fetch_row($result);
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Volunteers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- jQuery UI -->
        <link href="css/tables.css" rel="stylesheet" media="screen">

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <!-- Logo -->
                    <div class="logo">
                        <h1><a href="index.html">Vcare</a></h1>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="navbar navbar-inverse" role="banner">
                        <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
                                    <ul class="dropdown-menu animated fadeInUp">
                                        <li><a href="profile.html">Profile</a></li>
                                        <li><a href="login.html">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <ul class="nav">
                        <!-- Main menu -->
                        <li><a href="Donor.php"><i class="glyphicon glyphicon-home"></i> Donor</a></li>
                        <li  ><a href="Volunteer.php"><i class="glyphicon glyphicon-user"></i>Volunteer</a></i>
                        <li><a href="Patient.php"><i class="glyphicon glyphicon-user"></i>Patient</a></i>
                        <li><a href="Programs.php"><i class="glyphicon glyphicon-user"></i> Programs</a></li>
                        <li><a href="Budget.php"><i class="glyphicon glyphicon-book"></i> Budget</a></li>
                        <li class="current"><a href="Inventory.php"><i class="glyphicon glyphicon-ban-circle"></i>Inventory</a></li>
                        <li ><a href="mail.php"> <i class="fas fa-envelope">  Mail</i></a></li>



                    </ul>
                </div>
            </div><div class="col-md-10">

                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">Current Inventory: <?php echo $row[1]; ?></div>
                    </div>
                    <div class="panel-body" style="overflowauto;">
                        <div class="col-xs-4"></div><div class="col-xs-4">
                            <form name="form" action="Inventory.php" method="post">



                                <br><button type="submit" value="click" name="submit" class="btn btn-primary center-block" >Add 10 Medical Kits</button></form></div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <footer>
        <div class="container">

            <div class="copy text-center">
                <a href='#'>Website</a>
            </div>

        </div>
    </footer>

    <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/table1.js"></script>
    <!-- jQuery UI -->
    <script src="js/table2.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
    </body>
    </html>


<?php
if(isset($_POST['submit'])) {
    add1(10);
}
function add1($value){
    //echo 'inside';
    $servername = "localhost";
    $username = "root";
    $password = "secret";
    $dbname = "vcare";
// Create connection}
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "Select * from inventory ";
    $result = $conn->query($query);
    //print_r($result);
    $row = mysqli_fetch_row($result);
    $query1 = "UPDATE inventory SET medicalkit= $row[1]+10  WHERE id=1 ";
    $result1 = $conn->query($query1);
    // $row1 = mysqli_fetch_row($result1);
    $conn->close();
}
?>