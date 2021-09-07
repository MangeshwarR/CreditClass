<?php
  include "conection.php";
  session_start();

  if(isset($_SESSION["username"]))
  {
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
      <div class="col-md-4 mb-2 col-4">
      <input type="reset"  class="form-control btn bg-danger" value="Cancle" name="">
  </div>
  <div class="col-md-6 mb-2 col-7 mr-2">
  	
    <a href="adminpass.php"><input type="button"  class="form-control btn bg-success" value="Forget Password"></a>
</div>
</div> 
<div class="col-md-12 m-1  mx-auto">
<?php
    if(isset($_POST['login']))
    {
      include "conection.php";
      if(empty($_POST['name']) || empty($_POST['pass']))
      {
        echo '<div class="alert alert-danger">All Fields must be entered.</div>';
        die();
      }
      else
      {
        $name =  $_POST['name'];
        $pass = $_POST['pass'];
	        $sql = "SELECT * FROM admin WHERE name = '$name' AND pass= '$pass'";
        $run = mysqli_query($conn, $sql) or die("Query Failed.");
        if(mysqli_num_rows($run) > 0)
        {

          while($data = mysqli_fetch_assoc($run))
          {
            session_start();
            $_SESSION["username"] = $data['name'];
            $_SESSION["userpass"] = $data['pass'];
            $_SESSION["useremail"] = $data['email'];
            header("Location:adminpage.php");
          }

        }
        else
        {
           echo '<div class="alert alert-danger text-center">Username and Password are not matched,please fill correct username and password.</div>';
      }
    }
    }
  ?>
</div>
</form>
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