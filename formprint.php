// <?php
//    include('head.php');
  ?>
<?php
$cname =  $_POST['cname'];
$fname =  $_POST['fname'];
$mname =  $_POST['mname'];
$vill =  $_POST['vill'];
$block =  $_POST['block'];
$dist =  $_POST['dist'];
$dob =  $_POST['dob'];
$adhar =  $_POST['adhar'];
$mob =  $_POST['mob'];
$email =  $_POST['email'];
$class =  $_POST['class'];
$trade =  $_POST['trade'];
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
$query ="INSERT INTO `addmision`(`cname`,`fname`, `mname`, `vill`, `block`, `dist`, `dob`, `adhar`, `afimg`, `abimg`, `mob`, `email`, `class`, `trade`, `obmark`, `tomark`, `pec`, `collname`, `cclass`, `ctrade`, `lsub`, `board`, `img`, `sign`, `pass`) VALUES ( '$cname','$fname','$mname','$vill','$block','$dist','$dob','$adhar','$afimage','$abimage','$mob','$email','$class','$trade','$obmark','$tomark','$pec','$collname','$cclass','$ctrade','$lsub','$board','$imagename','$sign','$pass' )";



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
error_reporting(0);
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
	<title> navbar</title>
	 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<body>
<header><div class="container-fluid">
	<div class="row">
		<div class="col-">
			<img src="ca.png" width="452px" alt="" >
		</div>
		<div class=""></div>
	</div>
</div></header>
<div class="container-fluil ">
		<div class="row mt-2">
			<div class="col" id="top-line"></div>
		</div>
	</div>

<div class=" container shadow-lg mt-5">
<div class="row">
	
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<b>Reg: <?php echo $data['reg'];?>,<br>
			Name: <?php echo $data['cname'];?>,<br>
			Mother's: <?php echo $data['mname'];?>,<br>
			Fother's: <?php echo $data['fname'];?>,<br>
			Gender: <?php echo $data['gender'];?>,<br>
			Email id: <?php echo $data['email'];?>,<br>
			Mobile no: <?php echo $data['mob'];?>,<br>
			Class: <?php echo $data['class'];?>,<br>
			Board: <?php echo $data['board'];?>,<br>
			Learn Subject: <?php echo $data['lsub'];?>,<br>
			Collage Name: <?php echo $data['collname'];?></b><br>

			
		</div>
		<div class="col-md-6 text-center">
		
			
			
		</div>
		<div class="col-md-4 text-center">
			Date:
			<!-- <?php echo $data['dt'];?> -->
			
			
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col "><br>
			<p>This is certify that <b><?php echo $data['cname'];?></b> son/daughter of <b><?php echo $data['mname'];?></b> and <b><?php echo $data['fname'];?></b>
					admission form submission is  successful.
			</p>

			<br>
			<P>And date of birth <b><?php echo $data['dob'];?></b>
			& aadhar no  <b><?php echo $data['adhar'];?></b> will taken to verify student as  unique identification of the institute. </P><br>
				<div class="row justify-content-center">
					<div class="col-md-5   shadow">
						
						<img  height="180px" width="450px" src="adhar/<?php echo $data['afimg'];?>"><br>
						<!-- <img src="img/abse.jpg" width="450px" height="180px"> -->
						
					</div>
					<div class="col-md-5  shadow">
					<img  height="180px" width="450px" src="adhar/<?php echo $data['afimg'];?>">
							<!-- <img src="img/abse.jpg" width="450px" height="180px"> -->
						
					</div>
					
				</div>
	<p><br></p>
			<p>I <b><?php echo $data['cname'];?></b> promise that I will always present in the class timely and follow all the rule & regulation of the institute.
			</p>
			<p> Parent Sign_____________________________________ Date____/____/___________.</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-2">
		<p> Authorized Sign______________________________________ Date_____/_____/_____________.</p>
			
		</div>
		<div class="col-md-7 text-center">
		
			
			
		</div>
		<div class="col-md-3 text-center">
		<img  height="150px" width="150px" src="images/<?php echo $data['img'];?>"><br>
		<img  height="50px" width="150px" src="signature/<?php echo $data['sign'];?>"><br>
			<P><b>B.Com passed   <?php echo $data['obmark'];?>/<?php echo $data['tomark'];?> <br>
				Passing Year  <?php echo $data['pec'];?><br>
				Commerce  (12120), <br>
				Mobil no  <?php echo $data['mob'];?>,<br>
				 Email Id  <?php echo $data['email'];?>, <br>
				 Address<br>
				 Village  <?php echo $data['vill'];?>, <br>
				Post  <?php echo $data['block'];?>,<br>
				 District <?php echo $data['dist'];?></b>
				<!-- (222142). -->


			</P>
			 <button onclick="window. print()"> Save </button>
		</div>
	</div>
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