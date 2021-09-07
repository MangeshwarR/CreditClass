
 <?php 
  if(isset($_POST['roll']))
  {
    	$roll = $_POST['roll'];
   }
 else
  {
  ?>
	  
	 <!DOCTYPE html>
	 <html>
	 <head>
	 	<title></title>
       <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	 </head>
	 <body>
    <div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card shadow-lg">

	   <form action="" method="post">
	   	
	   	<div class="col-md-6"></div>
	   			<td>Roll No</td><td><input type="text" name="roll"></td>
	   		</tr>
        <tr>
          <td>Name</td><td><input type="text" name="name"></td>
        </tr>
	   		<tr>
	   			<th colspan="2"><input type="submit" class="btn-primary" value="Submit" name="submit"></th>
	   		</tr>
	   	</table>
	   </form>
   </div></div></div></div></body>
 </body>
 </html>
  <?php
}
?>
  
 <?php
if(isset($_POST['submit']) && isset($_POST['roll']))
{
  $roll =  $_POST['roll'];
  $name =  $_POST['name'];
 include 'conection.php';
 $sql = "SELECT * FROM `fees_11` WHERE  `roll`='$roll' AND name='$name'";
 $run = mysqli_query($conn,$sql);


 if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>

   <!DOCTYPE html>
<html>
<head>
	<style type="text/css"> 
h1{
	margin-left: 32px;
	position: relative;
}

h3{
	margin-left: 32px;
	position: relative;
}
p{
	margin-left: 32px;
	position: relative;
}

	</style>
	<title>Out of the admission form </title>
</head>
<body>
<table align="center">
<tr>
	<td colspan="1"><h1>Education Fees Detail</h1></td> 
</tr>
<tr>
	<td colspan="2"><hr/></td>
</tr>
<tr>
	<td>Roll No</td><td colspan="2"> <?php echo $data['roll'];?></td>
</tr>
<tr>
	<td>Student Name</td><td colspan="2"> <?php echo $data['name'];?></td>
</tr>
<tr>
	<!-- <td>Class</td><td colspan="2"> <?php echo $data['class'];?></td> -->
</tr>
<tr>
  <td>Month</td><td> Payment Date</td><td>Paid</td><td>Dcount</td><td>Unpaid</td><td>Echarge</td>
</tr>
<?php
$count=0;
while ($data=mysqli_fetch_assoc($run)) 
{
  $count++;
  ?>
<tr>
  <td><?php echo $data['month'];?></td>
	<td><?php echo $data['dt'];?></td> 
	  <td><?php echo $data['paid'];?></td>
    <td><?php echo $data['dcount'];?></td>
    <td><?php echo $data['unpaid'];?></td>
    <td><?php echo $data['echarge'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
<?php

  }
  else
  {
    ?>
      <table align="center" style="margin-top: 200px; font-size: 30px;" >
       <tr>
        <th>
         <?php echo "Your fees are not deposit.";?>
        </th>
       </tr>
      </table>
    <?php
  }
}
?>
















<!DOCTYPE html>
<html lang="en">
<head>
	<title> CREDIT Fee pay form</title>
	 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->

</head>
<body>
<div class="container">
	<div class="row mt-3">
		<!-- <div class="col-md-2"></div> -->
		<div class="col-md-10">
			<div class="card shadow-lg">
				<form action="" method="post"> 
				 <div class="card-header">
				<div class="input-group">
					<div class="input-group-prepend"><span class="input-group-text">Roll no</span></div>
					<input type="number" class="form-control" id="id1" name="roll" placeholder="Roll no">
				</div>
				<div class="input-group">
					<div class="input-group-prepend"><span class="input-group-text">Name</span></div>
					<input type="text" class="form-control" id="id1" name="name" placeholder="Enter name">
				</div>
				<div class="input-group">
					<div class="input-group-append"> <input type="submit" name="submit" value="Show" class="btn btn-primary"> </div>
				</div>
			</div>
		</form>

				<div class="card-body mx-auto">
					<p class="card-text">

					 <?php
					if(isset($_POST['submit']) && isset($_POST['roll']))
					{
					  $roll =  $_POST['roll'];
					  $name =  $_POST['name'];
					 $conn = mysqli_connect('localhost','root','','ccc');
					 $sql = "SELECT * FROM `fees_11` WHERE  `roll`='$roll' AND name='$name'";
					 $run = mysqli_query($conn,$sql);


					 if(mysqli_num_rows($run)>0)
					  {
					    $data=mysqli_fetch_assoc($run);
					   ?>
					  <p align="center"> Roll No : &nbsp;  <?php echo $data['roll'];?></p><br>
	                  <p align="center"> Student Name : &nbsp;<?php echo $data['name'];?></p><br>
	                   <table border="1px" align="center">
	                   	<tr>
	                   		<td>Month</td><td>Date</td><td>Paid</td><td>Unpaid</td><td>Discount</td><td>Extracharge</td><td>Total fees</td>
	                   	</tr>
	            			<?php
								$count=0;
								while ($data=mysqli_fetch_assoc($run)) 
								{
								  $count++;
								  ?>
								<tr>
								  <td><?php echo $data['month'];?></td>
									<td><?php echo $data['dt'];?></td> 
									  <td><?php echo $data['paid'];?></td>
								    <td><?php echo $data['dcount'];?></td>
								    <td><?php echo $data['unpaid'];?></td>
								    <td><?php echo $data['echarge'];?></td>
								    <td>2000Rs.</td>
								</tr>
								<?php
	                               }
	                            ?>
							</table>
	                   <?php
	                   }
	                   else
	                   	{
                           ?>
						      <table align="center" style="margin-top: 200px; font-size: 30px;" >
						       <tr>
						        <th>
						         <?php echo "Your fees are not deposit.";?>
						        </th>
						       </tr>
						      </table>
						    <?php
	                   	}
	               ?>
				
					</p>
				 </div>
				 
					 <?php 
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