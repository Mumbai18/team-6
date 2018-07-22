<?php require_once("db_connection.php");?>
<?php require_once("funtions.php");?>

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
                    <li class="current" ><a href="Volunteer.php"><i class="glyphicon glyphicon-user"></i>Volunteer</a></i> 
                    <li><a href="Patient.php"><i class="glyphicon glyphicon-user"></i>Patient</a></i> 
                    <li><a href="Programs.php"><i class="glyphicon glyphicon-user"></i> Programs</a></li>
                    <li><a href="budget.php"><i class="glyphicon glyphicon-book"></i> Budget</a></li>
                    <li><a href="Inventory.php"><i class="glyphicon glyphicon-ban-circle"></i>Inventory</a></li>
                    <li ><a href="mail.php"> <i class="fas fa-envelope">  Mail</i></a></li>



                </ul>
             </div>
		  </div><div class="col-md-10">

  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Volunteer Details</div>
				</div>
  				<div class="panel-body" style="overflowauto;">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email Id</th>
								<th>Password</th>
								<th>location</th>
                                <th>preference</th>
                                <th>Phone no</th>
                
							</tr>
						</thead>

                        <tbody>
                        <?php $result_set=find_volunteer(); ?>
                        <?php while($row= mysqli_fetch_assoc($result_set)) { ?>
                            <tr>
                                <td><a href="volunteer-patients.php?id=<?php echo $row['id'];?>"><?php echo $row['name']; ?></a></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['password'];?></td>
                                <td><?php echo $row['location'];?></td>
                                <td><?php echo $row['preference'];?></td>
                                <td><?php echo $row['phone-no'];?></td>





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