<?php
   $roll = $_GET['roll'];
	include 'conection.php';
 	$sql = "SELECT * FROM `fees_12` WHERE `roll`='$roll'";
 	$run = mysqli_query($conn,$sql);
 	$data=mysqli_fetch_assoc($run);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Credit Class TestForm</title>
	 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-8">
			<div class="card shadow-lg">
				<form class="form-group" action="feepayformedit1_12.php" method="post" enctype="multipart/form-data">
					<div class="col-md-12 text-center bg-danger text-white"><h2>Student Fees </h2> 
			</div>
					<div class="form-group">
			<label for="fathern">Roll No</label>
			<div class="input-group-prepend">
				<input type="number" class="form-control" id="fathern" name="roll" value="<?php echo $data['roll']; ?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Name</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="name" value="<?php echo $data['name'];?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Month</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="month" value="<?php echo $data['month'];?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Date</label>
			<div class="input-group-prepend">
				<input type="date" class="form-control" id="fathern" name="dt" value="<?php echo $data['dt'];?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Paid</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="paid" value="<?php echo $data['paid'];?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Discont</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="dcount" value="<?php echo $data['dcount'];?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Unpaid</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="unpaid" value="<?php echo $data['unpaid'];?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Extra Charge</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="echarge" value="<?php echo $data['echarge'];?>">
			</div>
			</div>
			<div class="col-md-4 mb-2 col-5">
				<input type="hidden" name="roll" value="<?php echo $data['roll']; ?>">
			<input type="submit"  class="form-control btn bg-primary" value="Submit" name="submit">
		</form>
		</div>



 </div>
			</div>

		</div>
		 
	</div>
</div>	



	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- <!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>

</body> 
 
<html> 