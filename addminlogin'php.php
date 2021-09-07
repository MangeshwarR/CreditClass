<?php
  include "conection.php";
  session_start();

  if(isset($_SESSION["username"])){
    header("Location:adminpage.php");
  }
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
				<div class="media-body"><h3>CREDIT INSTITUTE <sub><small>Admin Login</small></sub></h3>
				</div>

				</div>
				
			</div>
				<div class="card-body ">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="form-group mt-4">
					<label for="un">Username</label>
					 <div class="form-group">
			<input type="text" required class="form-control " id="un" name="name" placeholder="Enter username">
		</div>
			<label for="pass">Password</label>
					 <div class="form-group">
			<input type="Password" required class="form-control " id="pass" name="pass" placeholder="Enter password">
		</div>	
				 </div>

				  <div class="col-md-4 mb-2 col-5 mx-auto"> 
      <input type="submit"  class="form-control btn bg-primary" value="Next" name="login">
    </div>
    <div class="row justify-content-around" >
      <div class="col-md-4 mb-2 col-6">
      <input type="reset"  class="form-control btn bg-danger" value="Cancle" name="">
  </div>
  <div class="col-md-6 mb-2 col-6">
  	  
 <?php  
  
  include 'conection.php';
  $sql = "SELECT * FROM `admin`";
  $run = mysqli_query($conn,$sql);
  $data=mysqli_fetch_assoc($run);
  ?>
    <a href="adminpass.php?id=<?php echo $data['id'];?>"><input type="button"  class="form-control btn bg-success" value="Forget Password"></a>
</div>
</div> 


<!-- 
				 <div class="card-footer mx-auto">
		<input type="submit" name="login" class="btn btn-danger mx-3" value="Login"> <a href="../index.php"class="mx-4 btn btn-primary">Cancel</a>
 -->				 
				 	<!-- </div> -->
					 </div>
					</form>

					  <?php
                          if(isset($_POST['login'])){
                            include "conection.php";
                            if(empty($_POST['name']) || empty($_POST['pass'])){
                              echo '<div class="alert alert-danger">All Fields must be entered.</div>';
                              die();
                            }
                            else
                            {
                              $name =  $_POST['name'];
                              $pass = $_POST['pass'];
                 			  $sql = "SELECT * FROM admin WHERE name = '$name' AND pass= '$pass'";
                              $result = mysqli_query($conn, $sql) or die("Query Failed.");
                              if(mysqli_num_rows($result) > 0)
                              {

                                while($row = mysqli_fetch_assoc($result))
                                {
                                  session_start();
                                  $_SESSION["username"] = $row['name'];
                                  $_SESSION["userpass"] = $row['pass'];
                                  header("Location:adminpage.php");
                                }

                              }
                              else
                              {
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
	
		<script type="text/javascript" src="js/jquery.js"></script>
	<!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>
</body>
</html>