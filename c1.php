<?php

  include "conection.php";
  

  
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title> CREDIT Admin Login Page</title>
	 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
	  
</head>
<body>
<div class="container">
	<div class="row mt-3">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			<div class="card shadow-lg">
				
				 <div class="card-header">
				 	<div class="media">
				<img src="ci.png" width="40px" height="40px">
				<div class="media-body"><h3>CREDIT INSTITUTE </h3>
				</div>

				</div>
				
			</div>
				<div class="card-body">
				<form action="c2.php" method="POST" class="form-group mt-4">
					<label for="un">Registration No</label>
					 <div class="form-group">
			<input type="text" class="form-control " id="un" name="regno" placeholder="Enter Registration number">
		</div>
			
	
						
				 </div>
				 <div class="card-footer ">
		<input type="submit" name="login" class="btn btn-danger ml-5 mr-5 " value="Next"> <a href="../index.php"class=" btn btn-primary ml-5 ">Home</a>
				 
				 	</div>
					 </div>
					</form>

					  <?php
                          if(isset($_POST['login'])){
                            include "conection.php";
                            if(empty($_POST['regno'])){
                              echo '<div class="alert alert-danger">All Fields must be entered.</div>';
                              die();
                            }else{
                              $regno = mysqli_real_escape_string($conn, $_POST['regno']);
                              // $password = ($_POST['password']);

                   $sql = "SELECT reg,cname,adhar,cclass FROM addmision WHERE reg = {$regno} ";

                              $result = mysqli_query($conn, $sql) or die("Query Failed.");

                              if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                  session_start();
                                  $_SESSION["regno"] = $row['reg'];
                                  $_SESSION["username"] = $row['cname'];
                                  $_SESSION["useradhar"] = $row['adhar'];
                                  $_SESSION["usercclass"] = $row['cclass'];

                                  header("Location:c2.php");
                                }

                              }else{
                              echo '<div class="alert alert-danger">Registration no and Password are not matched. Try another way to reprint the form. </div>';
                            }
                          }
                          }
                        ?>

			</div>

		</div>
		<div class="col-md-3"></div>
	</div>
</div>	
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>

</body>
</html> 