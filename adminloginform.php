<?php
  include "config.php";
  session_start();

  if(isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/adminpage.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title> CREDIT Admin Login Page</title>
	 <?php include 'adminheader.php'; ?>
</head>
<body>
<div class="container">
	<div class="row mt-3">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			<div class="card shadow-lg">
				
				 <div class="card-header">
				 	<div class="media">
				<img src="img/ci.png" width="40px" height="40px">
				<div class="media-body"><h3>CREDIT INSTITUTE <sub><small>Admin Login</small></sub></h3>
				</div>

				</div>
				
			</div>
				<div class="card-body ">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="form-group mt-4">
					<label for="un">Username</label>
					 <div class="form-group">
			<input type="text" required class="form-control " id="un" name="username" placeholder="Enter username">
		</div>
			<label for="pass">Password</label>
					 <div class="form-group">
			<input type="Password" required class="form-control " id="pass" name="password" placeholder="Enter symbol">
		</div>

	
						
				 </div>
				 <div class="card-footer mx-auto">
		<input type="submit" name="login" class="btn btn-danger mx-3" value="Login"> <a href="../index.php"class="mx-4 btn btn-primary">Cancel</a>
				 
				 	</div>
					 </div>
					</form>

					  <?php
                          if(isset($_POST['login'])){
                            include "config.php";
                            if(empty($_POST['username']) || empty($_POST['password'])){
                              echo '<div class="alert alert-danger">All Fields must be entered.</div>';
                              die();
                            }else{
                              $username = mysqli_real_escape_string($conn, $_POST['username']);
                              $password = ($_POST['password']);

                   $sql = "SELECT Name,Sign,Password FROM admin WHERE Name= '{$username}' AND Password= '{$password}'";

                              $result = mysqli_query($conn, $sql) or die("Query Failed.");

                              if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                  session_start();
                                  $_SESSION["username"] = $row['Name'];
                                  $_SESSION["usersign"] = $row['Sign'];
                                  $_SESSION["userpass"] = $row['Password'];

                                  header("Location: {$hostname}/admin/adminpage.php");
                                }

                              }else{
                              echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
                            }
                          }
                          }
                        ?>

			</div>

		</div>
		<div class="col-md-3"></div>
	</div>
</div>	
	<?php include 'adminscript.php'; ?>
</body>
</html> 