<?php require_once ("db_connection.php");?>
<?php require_once ("funtions.php");?>
<?php


if(isset($_POST['submit']))
{
    //echo"test";
    $Query = "INSERT INTO programs(program,ranking)values( ";
    $Query .= "'" . $_POST['program'] . "', ";
    $Query .=  $_POST['ranking'] .");" ;
    //echo $Query;
    //echo $_POST["gender"];
    //$Query .= "'" . $_POST["gender"] . "' )";
    //echo $Query;
    $result = mysqli_query($conn, $Query);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Programs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="css/tables.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

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
    <div     class="container">
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
                <h3><a href="Volunteer.php"><i class="fas fa-angle-double-left" style="color: black"></i>Volunteer</a></h3>

                <!--           </li> <a><i class="fas fa-angle-double-left" style="color: black"></i></a>-->
                <ul class="nav">
                    <!-- Main menu -->
                    <li ><a href="Donor.php"><i class="glyphicon glyphicon-home"></i>Donor</a></li>
                    <li><a href="Volunteer.php"><i class="glyphicon glyphicon-user"></i>Volunteer</a></li>
                    <li><a href="Patient.php"><i class="glyphicon glyphicon-user"></i>Patient</a></li>
                    <li class="current"><a href="Programs.php"><i class="glyphicon glyphicon-book"></i>Programs</a></li>
                    <li><a href="Budget.php"><i class="glyphicon glyphicon-book"></i> Budget</a></li>
                    <li><a href="Inventory.php"><i class="glyphicon glyphicon-ban-circle"></i>Inventory</a></li>
                    <li ><a href="mail.php"> <i class="fas fa-envelope">  Mail</i></a></li>




                </ul>
            </div>
        </div>
        <div class="col-md-10">

            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title" style="font-size: 25px">Programs</div>
                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal" >Add a program</button>

                </div>
                <div class="panel-body" style="overflow-y:auto;">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                        <tr>
                            <td>Program Name</td>
                            <td>Rank</td>







                        </tr>
                        </thead>
                        <tbody>
                        <?php


                            $result_set = find_programs();
                            while ($row = mysqli_fetch_assoc($result_set)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['program']; ?></td>
                                    <td><?php echo $row['ranking']; ?></td>

                                </tr>
                                <?php

                            }



                        ?>




                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Task!</h4>
            </div>
            <form action="programs.php" method="post">
                <div class="modal-body">
                    <input class="form-control" type="text" name="program" placeholder="program-name" value="">
                    <input class="form-control" type="number" name="ranking" placeholder="rank" value="">

                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-info" >Submit</button>
                </div>
            </form>
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