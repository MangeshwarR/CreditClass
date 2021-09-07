
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Credit Class TestForm</title>
	 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="navbar.css">

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-8">
			<div class="card shadow-lg">
				<form class="form-group" action="feepayform_b2.php" method="post" enctype="multipart/form-data">
					<div class=" col bg-primary text-center"><h1 class="text-white"> Credit Institute B.Com 2 <sup>nd</sup> Class Student Fees Details</h1>
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
			<label for="class">Month</label>
			<select id="month"class="custom-select" name="month">
				<option> Select</option>
	            <option value="January"> January</option> 
	             <option value="February">February</option> 
	              <option value="March"> March</option> 
	               <option value="April"> April</option> 
	                <option value="May"> May</option> 
	                 <option value="June">June</option> 
	                  <option value="July"> July</option> 
	                   <option value="August"> August</option> 
	                    <option value="September"> September</option> 
	                     <option value="October"> October</option> 
	                      <option value="November">November</option> 
	                       <option value="December"> December</option> 
	             
			</select>
	
</div>

			<div class="form-group">
			<label for="fathern">Date</label>
			<div class="input-group-prepend">
				<input type="text" value="<?php echo date('d/m/Y');?>" class="form-control" id="fathern" name="dt" value="<?php ?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Paid</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="paid" value="<?php ?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Discont</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="dcount" value="<?php ?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Unpaid</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="unpaid" value="<?php ?>">
			</div>
			</div>
			<div class="form-group">
			<label for="fathern">Extra Charge</label>
			<div class="input-group-prepend">
				<input type="text" class="form-control" id="fathern" name="echarge" value="<?php ?>">
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
$month=$_POST['month'];
$dt=$_POST['dt'];
$paid=$_POST['paid'];
$dcount=$_POST['dcount'];
$unpaid=$_POST['unpaid'];
$echarge=$_POST['echarge'];
include 'conection.php';
$query ="INSERT INTO `fees_b2`(`roll`, `name`, `month`, `dt`, `paid`, `dcount`, `unpaid`, `echarge`) VALUES ('$roll','$name','$month','$dt','$paid','$dcount','$unpaid','$echarge')";
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
$query = "SELECT * FROM `fees_b2` WHERE roll='$roll'";
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
 			  <td>Month</td><td><?php echo $data['month'];?></td>	
 			</tr>
 			<tr>
 			  <td>Date</td><td><?php echo $data['dt'];?></td>	
 			</tr>
 			<tr>
 			  <td>Paid</td><td><?php echo $data['paid'];?></td>	
 			</tr>
 			<tr>
 			  <td>Discount</td><td><?php echo $data['dcount'];?></td>	
 			</tr>
 			<tr>
 			  <td>Unpaid</td><td><?php echo $data['unpaid'];?></td>	
 			</tr>
 			<tr>
 			  <td>Extra Charge</td><td><?php echo $data['echarge'];?></td>	
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