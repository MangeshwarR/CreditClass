
 <?php
include 'sedestroy.php';
include 'conection.php';
$aadhar=$_SESSION['useradhar'];

 $sql = "SELECT * FROM `addmision` WHERE  adhar='$aadhar'";
 $run = mysqli_query($conn,$sql);
 if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> CREDIT  VIEW NEW STUDENT </title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>
<div class="container   mt-4 pb-2 mb-5 overflow-auto">
	<div class="row  ">

		<div class="col-12 mx-auto">
			<img src="cip.png" class="img-fluid" width="">
		 </div>
	</div>
	<div class="row">
		<div class="col-5 ml-5 "><p>Registration Number - <?php echo $data['reg'];?> </p>	</div>
		<div class="col-5 ml-5 "><p>	Date-<?php echo date('D') ;?>&nbsp;&nbsp;<?php echo date('d/M/Y') ;?> </p>	</div>
	</div>
	<div class="row">
		<div class="col-8 ml-5 mb-2">
	<p>			Candidate Name - <?php echo $data['cname'];?><br> </p>
		<p>	Father's Name -  Shri <?php echo $data['fname'];?><br> </p>
			<p>Mother's Name - Shrimati <?php echo $data['mname'];?> <br></p>
	
	<p>		Date Of Birth -  <?php echo $data['dob'];?><br></p>
		<p>	Adhaar Number - <?php echo $data['adhar'];?><br></p>
	<p>		Mobile Number -  <?php echo $data['mob'];?><br></p>
		<p>	E-mail Adress - <?php echo $data['email'];?><br>
</p>
<p>	Adress - <?php echo $data['vill'];?>,<?php echo $data['block'];?>,<?php echo $data['dist'];?><br></p>
		</div>
		<div class="col-2 my-0  "> <img src="images/<?php echo $data['img'];?>" class=" mx-auto rounded" height="200px" width="200px"><img src="signature/<?php echo $data['sign'];?>" class=" mx-auto mt-2" width=" 200px" height="50px">
			<p><i>Sign__________________________</i></p>
		</div>
	</div>
	<div class="row mx-auto m-3  ">
		   <div class="col-6  py-0">
		   <h3 class="text-nowrap text-nowrap border">Privious Year Education Detail</h3>
	 <p>Class Name -  <?php echo $data['class'];?><br></p>
		<p>	Trade/Sector - <?php echo $data['trade'];?><br></p>
			<p>Passing Year - <?php echo $data['pec'];?><br></p>
		<p>	Result - <?php echo $data['obmark'];?>/<?php echo $data['tomark'];?><br></p>

	</div>

		<div class="col-6 py-0 ">
		   	<h3 class="text-nowrap border text-nowrap">Cerrent Year Education Detail</h3>


		<p>	Class Name - <?php echo $data['cclass'];?><br></p>
		<p>	College Name - <?php echo $data['collname'];?><br></p>
		  <p> Board/University Name - <?php echo $data['board'];?><br></p>
		<p>	Learn Subject Name - <?php echo $data['lsub'];?><br></p>
				
		</div> </div>
		<div class="row mx-auto m-3 text-nowrap ">
			<div class="col-2"></div>
		<div class="col-4 ">
		   	<img src="adhar/<?php echo $data['afimg'];?>" class="rounded"  width="300px" height="200px">
		   </div>
		   <div class="col-4 ">
		   	<img src="adhar/<?php echo $data['abimg'];?>" class="rounded " width="300px" height="200px">
		   </div>
			<div class="col-2"></div>
	</div>

	<div class="row">
		<div class="col p-3 ml-5 mb-2"> I  <b><i>  <?php echo $data['cname'];?></i></b>  promise that I will always present in the class timely & follow all the rule and regulation of the Institute.</div>
	</div>
	<div  class="row">
		<div class=" mx-auto d-print-none ">
	
		 <a href="c1.php"class="mx-4 btn btn-danger">Go Back</a>
		 <a href="c3.php"class="mx-4 btn btn-primary">Add Student</a>
				 
	</div>
</div>

</div>
<script type="text/javascript" src="js/jquery.js"></script>
	<!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>
</body>
</html>
<?php
 } 
?>