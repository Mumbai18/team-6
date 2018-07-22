<?php require_once("db_connection.php");?>
<?php require_once("funtions.php");?>

<!DOCTYPE html>
<html>
  <head>
    <title>Patient</title>
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
            <h3><a href="Volunteer.php"><i class="fas fa-angle-double-left" style="color: black"></i>Volunteer</a></h3>

            <!--           </li> <a><i class="fas fa-angle-double-left" style="color: black"></i></a>-->
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="volunteer-patients.php"><i class="glyphicon glyphicon-home"></i>Patients Assigned</a></li>
                    <li><a href="volunteer-tasks.php?id=<?php if(isset($_GET['id'])) echo $_GET['id'];?>"><i class="glyphicon glyphicon-user"></i>Tasks Assigned</a></li>

                   


                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Patient Details</div>
				</div>
  				<div class="panel-body" style="overflow-y:auto;">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Name</th>
								<th>Gender</th>
                                <th>Hospital name</th>
                                <th>Cancer Type</th>
                                <th>Program Type</th>






                            </tr>
						</thead>
						<tbody>
<?php
                        if(isset($_GET['id']))
                        {
                        $result_set=find_patients_by_vid($_GET['id']);
                        while($row=mysqli_fetch_assoc($result_set)) { ?>



                        <tr>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['hospital'];?></td>
                            <td><?php echo $row['cancer-type'];?></td>
                            <td><?php echo $row['program-type'];?></td>




                        </tr>
                        <?php
                            }
                        }

                        ?>
            
						</tbody>
					</table>
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