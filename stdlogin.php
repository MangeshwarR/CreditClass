<?php
  include "config.php"; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title> CREDIT forgort password form </title>
	<?php include 'stheader.php'; ?>
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
				<div class="media-body"><h3>CREDIT INSTITUTE <sub>Forgot Pass</sub></h3>
				</div>

				</div>
				
			</div>
				<div class="card-body ">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="form-group mt-4">
					<label for="un">Mother's Name</label>
					 <div class="form-group">
			<input type="text" required class="form-control " id="un" name="umname" placeholder="Enter same format as formfil.">
		</div>
			<label for="pass">Aadhar No</label>
					 <div class="form-group">
			<input type="text" required class="form-control " id="pass" name="adh" placeholder="Enter Aadhar No">
		</div>
		<label for="pass"> Mobile No</label>
					 <div class="form-group">
			<input type="password" required class="form-control " id="pass" name="umob" placeholder="Enter added mobile no">
		</div>

	
						
				 </div>
				 <div class="card-footer mx-auto">
		<input type="submit" name="login" class="btn btn-danger mx-3" value="Next"> <a href="../index.php"class="mx-4 btn btn-primary">Home</a>
				 
				 	</div>
					 </div>
					</form>

					  <?php
                          if(isset($_POST['login'])){
                            include "config.php";
                            if(empty($_POST['adh']) || empty($_POST['umob'])){
                              echo '<div class="alert alert-danger">All Fields must be entered.</div>';
                              die();
                            }else{
                              $usmname = ($_POST['umname']);
                              $adhar = ($_POST['adh']);
                              $usmob = ($_POST['umob']);

                   $sql = "SELECT reg,cname,mob,adhar FROM class_11 WHERE mname='{$usmname}'AND mob ='{$usmob}'AND adhar = '{$adhar}'";

                              $result = mysqli_query($conn, $sql) or die("Query Failed.");

                              if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                  session_start();
                                  $_SESSION["regno"] = $row['reg'];
                                  $_SESSION["username"] = $row['cname'];
                                  $_SESSION["useradhar"] = $row['adhar'];
                                  

                                }
                                  header("Location: {$hostname}/st/stfgpass2.php");

                              }
                              else
                              {
                              echo '<div class="alert alert-danger"> Input informations are not matched . Try again with correct information. </div>';
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