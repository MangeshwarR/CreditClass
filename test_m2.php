
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
				<form class="form-group" action="test_m2.php" method="post" enctype="multipart/form-data">
					<div class=" col bg-primary text-center"><h1 class="text-white"> Credit Institute M.Com 2<sup>nd</sup> Class Student Test Details</h1>
        </div>
        <div class="card-header">
					<div class="form-group">
			<label for="fathern">Roll No</label>
			<div class="input-group-prepend">
				<input type="number" class="form-control" id="fathern" name="roll" value="<?php ?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Name</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="name" value="<?php ?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Date</label>
			<div class="input-group-prepend">
				<input type="text" value="<?php echo date('d/m/Y');?>" class="form-control" id="fathern" name="dt" value="<?php ?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Attend</label>
			<div class="input-group-prepend">
				<div class="col-6"> 
				<input type="radio" name="attend" value="P"></div><div class="col-6"> </td><td><input type="radio" name="attend" value="A">
				</div>
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Subject</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="subj" value="<?php ?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Obtain Mark</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="obmark" value="<?php ?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Total Mark</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="tomark" value="<?php ?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Result</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="result" value="<?php ?>">
			</div>
			</div>
			<div class="col-md-4 mb-2 col-5">
			<input type="submit"  class="form-control btn bg-primary" value="Submit" name="submit">
	</div>
		</div>
		</form>
		<div class="card-body mx-auto">
          <p class="card-text">
	<?php
if (isset($_POST['submit'])) {
	

$roll=$_POST['roll'];
$name=$_POST['name'];
$dt=$_POST['dt'];
$attend=$_POST['attend'];
$subj=$_POST['subj'];
$obmark=$_POST['obmark'];
$tomark=$_POST['tomark'];
$result=$_POST['result'];
include 'conection.php';
$query ="INSERT INTO `test_m2`(`roll`, `name`, `dt`, `attend`, `subj`, `obmark`, `tomark`, `result`) VALUES ('$roll','$name','$dt','$attend','$subj','$obmark','$tomark','$result')";
 
$run = mysqli_query($conn,$query);
if($run == TRUE)
 {
 	?>
 	<!-- <script type="text/javascript">
 		alert('Roll No Uploaded Successfully.');
 		window.open('cstudent.php?reg=<?php echo $reg; ?>','_self');
 	</script> -->
 	<?php
 	// echo "Success";
 	$roll=$_POST['roll'];
 	include 'conection.php';
$query = "SELECT * FROM `test_m2` WHERE roll='$roll'";
$run = mysqli_query($conn,$query);
 	    if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>
 		<table align="center">
 			<tr>
 			  <td>Roll No</td><td><?php echo $data['roll'];?></td>	
 			</tr>
 			<tr>
 			  <td>Nmae</td><td><?php echo $data['name'];?></td>	
 			</tr>
 			
 			<tr>
 			  <td>Date</td><td><?php echo $data['dt'];?></td>	
 			</tr>
 			<tr>
 			  <td>Attendence</td><td><?php echo $data['attend'];?></td>	
 			</tr>
 			<tr>
 			  <td>Subject</td><td><?php echo $data['subj'];?></td>	
 			</tr>
 			<tr>
 			  <td>Obtain Mark</td><td><?php echo $data['obmark'];?></td>	
 			</tr>
 			<tr>
 			  <td>Total Mark</td><td><?php echo $data['tomark'];?></td>	
 			</tr>
 			<tr>
 			  <td>Result</td><td><?php echo $data['result'];?></td>	
 			</tr>
 		</table>
 		<?php
 	    }
   }
 else
   {
     echo "Error !!!!!";

   }
}



?>
</p>
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