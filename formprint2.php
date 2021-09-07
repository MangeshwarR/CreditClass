<?php
   // include('head.php');
  ?>
<?php
$cname =  $_POST['cname'];
$fname =  $_POST['fname'];
$mname =  $_POST['mname'];
$gender =  $_POST['gender'];
$vill =  $_POST['vill'];
$block =  $_POST['block'];
$dist =  $_POST['dist'];
$dob =  $_POST['dob'];
$adhar =  $_POST['adhar'];
// $afimg =  $_POST['afimg'];
// $abimg =  $_POST['abimg'];
$mob =  $_POST['mob'];
$email =  $_POST['email'];
$class =  $_POST['class'];
$trade =  $_POST['trade'];
// $roll =  $_POST['roll'];
$obmark =  $_POST['obmark'];
$tomark =  $_POST['tomark'];
$pec =  $_POST['pec'];
$collname =  $_POST['collname'];
$cclass =  $_POST['cclass'];
$ctrade =  $_POST['ctrade'];
$lsub =  $_POST['lsub'];
$board =  $_POST['board'];
$pass =  $_POST['pass'];
$imagename = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"images/$imagename");
$sign = $_FILES['sign']['name'];
$tempname = $_FILES['sign']['tmp_name'];
move_uploaded_file($tempname,"signature/$sign");
$afimage = $_FILES['afimg']['name'];
$tempname = $_FILES['afimg']['tmp_name'];
move_uploaded_file($tempname,"adhar/$afimage");
$abimage = $_FILES['abimg']['name'];
$tempname = $_FILES['abimg']['tmp_name'];
move_uploaded_file($tempname,"adhar/$abimage");
include 'conection.php';
$query ="INSERT INTO `addmision`(`cname`,`fname`, `mname`, `gender`, `vill`, `block`, `dist`, `dob`, `adhar`, `afimg`, `abimg`, `mob`, `email`, `class`, `trade`, `obmark`, `tomark`, `pec`, `collname`, `cclass`, `ctrade`, `lsub`, `board`, `img`, `sign`, `pass`) VALUES ( '$cname','$fname','$mname','$gender','$vill','$block','$dist','$dob','$adhar','$afimage','$abimage','$mob','$email','$class','$trade','$obmark','$tomark','$pec','$collname','$cclass','$ctrade','$lsub','$board','$imagename','$sign','$pass' )";



$run = mysqli_query($conn,$query);
if($run == TRUE)
 {
   // echo "<script> alert('Your Registration Successfully')</script>";
    // echo "Data insert Successfully";
    // echo "<a href='stud.html'>Insert new data</a><br>";
    // echo "<a href='viewdata.php'>View students details</a>";
   }
 else
   {
     echo "Error !!!!!";

   }




?>

 <?php
if(isset($_POST['submit']))
  $pass =  $_POST['pass'];
include 'conection.php';
 $sql = "SELECT * FROM `addmision` WHERE  pass='$pass'";
 $run = mysqli_query($conn,$sql);


 if(mysqli_num_rows($run)>0)
  {
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



<div class="container  shadow-lg  mt-4 pb-3 overflow-auto">
	<div class="row  ">

		<div class="col-12 mx-auto">
			<img src="img/cip.png" class="img-fluid" width="">
		 </div>
	</div>
	<div class="row">
		<div class="col-5 ml-5 "><p>Registration Number - <?php echo $data['reg'];?> </p>	</div>
		<div class="col-5 ml-5 "><p>	Date- </p>	</div>
	</div>
	<div class="row">
		<div class="col-8 ml-5 mb-2">
	<p>			Candidate Name - <?php echo $data['cname'];?><br> </p>
		<p>	Father's Name - <?php echo $data['fname'];?><br> </p>
			<p>Mother's Name - <?php echo $data['mname'];?> <br></p>
			<p>Gender - <?php echo $data['gender'];?> <br></p>
		<p>	Adress - <?php echo $data['vill'];?>,<?php echo $data['block'];?>,<?php echo $data['dist'];?><br></p>
	<p>		Date Of Birth -  <?php echo $data['dob'];?><br></p>
		<p>	Adhaar Number - <?php echo $data['adhar'];?><br></p>
	<p>		Mobile Number -  <?php echo $data['mob'];?><br></p>
		<p>	E-mail Adress - <?php echo $data['email'];?><br>
</p>
		</div>
		<div class="col-2 my-0  "> <img src="images/<?php echo $data['img'];?>" class="img-fluid rounded-circle img-thumbnail" height="" width=""><img src="signature/<?php echo $data['sign'];?>" class=" border mx-auto" width=" 200px" height="44px"></div>
	</div>
	<div class="row mx-auto m-3 text-nowrap border ">
		   <div class="col-12 ">
		   <h3 class="text-nowrap">Privious Year Education Detail</h3>
		   </div>
		   
	</div>
	<div class="row">
		<div class="col-11 pl-5">
	<p>		Class Name -  <?php echo $data['class'];?><br></p>
		<p>	Trade/Sector - <?php echo $data['trade'];?><br></p>
		<p>	Roll No - <?php echo $data['pec'];?><br></p>
		<p>	Result - <?php echo $data['obmark'];?>/<?php echo $data['tomark'];?><br></p>

		</div>
		
	</div>
	<div class="row mx-auto m-3 text-nowrap border">
		<div class="col-12 ">
		   	<h3 class="">Cerrent Year Education Detail</h3>
		   </div>
	</div>
	<div class="row">
		<div class="col-11 pl-5">
		<p>	Class Name - <?php echo $data['cclass'];?><br></p>
		<p>	College Name - <?php echo $data['collname'];?><br></p>
		<p>	Board/University Name - <?php echo $data['board'];?><br></p>
			<!-- <form><a href="	 " class="btn btn-secondary"> Add Student</a></form> -->
		</div>
	</div>

	
	<div class="row justify-content-center p-4">
					<div class="col-md-5   shadow">
						
							<img src="adhar/<?php echo $data['afimg'];?>" width="450px" height="180px">
						
					</div>
					<div class="col-md-5  shadow">
						
							<img src="adhar/<?php echo $data['abimg'];?>" width="450px" height="180px">
						
					</div>
					
				</div>

	<div class="row">
		<div class="col p-3 ml-5 mb-2"> I ________________________________promise that I will always present in the class timely & follow all the rule and regulation of the Institute.</div>
	</div>
	<div class="row mb-5 pb-5">
		<div class="col-5 ml-5"><p>Parent sign _________________________________ <br> </p><p> Date _____________ </p></div>
		<div class="col-6"><p> Authorized sign __________________________ <br></p> <p>Date_____________</div></p>
	</div>
</div>




	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>

</body>
</html>
<?php
}
else
{
	echo "Error";
}
?>