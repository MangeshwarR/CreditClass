
<?php
  $id =  $_GET['id'];

include 'conection.php';
$sql = "SELECT * FROM `class_12` WHERE reg='$id'";
 // $sql = "SELECT * FROM `addmision` WHERE  pass='$pass'";
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
<link rel="stylesheet" type="text/css" href="navbar.css"> 
<style>
@media screen and (max-width:490px)
 {  
   .text-nowrap
   {
   	 font-size: 18px;
   }
    #p
   {
   	height: 80px;
   	width: 75px;
   	margin-left: 0;
   }
   #s
   {
   	height: 35px;
   	width: 75px;
   	margin-left: 0;
   }
   .mg
   {
   	height: 75px;
   	width:75px;
   }
   .mt-2
   {
   	height: 75px;
   	width:75px;
   }
    
 }
	@media screen and (max-width:490px)
 { 
   .text-nowrap
   {
   	 font-size: 18px;
   }
    #p
   {
   	height: 80px;
   	width: 75px;
   	margin-left: 0;
   }
   #s
   {
   	height: 35px;
   	width: 75px;
   	margin-left: 0;
   }
   .mg
   {
   	height: 75px;
   	width:75px;
   }
   .mt-2
   {
   	height: 75px;
   	width:75px;
   }
    
 }
@media screen and (max-width:390px)
 { 
   .text-nowrap
   {
   	 font-size: 18px;
   }
    #p
   {
   	height: 60px;
   	width: 50px;
   	margin-left: 0;
   }
   #s
   {
   	height: 25px;
   	width: 50px;
   	margin-left: 0;
   }
   .mg
   {
   	height: 75px;
   	width:75px;
   }
   .mt-2
   {
   	height: 75px;
   	width:75px;
   }
    
 }
 @media screen and (max-width:330px)
 {  
   .text-nowrap
   {
   	 font-size: 18px;
   }
    #p
   {
   	height: 45px;
   	width: 40px;
   	margin-left: 0;
   }
   #s
   {
   	height: 25px;
   	width: 40px;
   	margin-left: 0;
   }
   .mg
   {
   	height: 55px;
   	width:55px;
   }
   .mt-2
   {
   	height: 55px;
   	width:55px;
   }
    
 }
 @media screen and (max-width:250px)
 {
     
   .text-nowrap
   {
   	 font-size: 14px;
   }
    #p
   {
   	height: 75px;
   	width: 75px;
   	margin-left: 0;
   }
   #s
   {
   	height: 20px;
   	width: 75px;
   	margin-left: 0;
   }
   .mg
   {
   	height: 35px;
   	width:30px;
   }
   .mt-2
   {
   	height:35px;
   	width:30px;
   }
    
 }
 </style>
</head>
<body>
<div class="container    mt-4 pb-2 overflow-auto">
	<div class="row  ">
		<div class="col-12 mx-auto">
			<img src="cip1.png" class="img-fluid" width="">
		 </div>
	</div>
	<div class="row ">
			<div class="col-md-4 mx-auto">
			   <h3><a href='fees12.php' class="ml-5 btn btn-primary text-white">Fees Detail</a></h3>
			 </div>
			 <div class="col-md-4 mx-auto">
			 	<h3><a href='stdattend12.php' class="ml-5 btn btn-primary text-white">Attandence Detail</a></h3>
			 	 </div>
			 <div class="col-md-4 mx-auto">
			 	<h3><a href='stdtest12.php' class="ml-5 btn btn-primary text-white">Test Detail</a></h3>
			 </div>
	</div>
	<div class="row ">
		<div class="col-12 mx-auto">
			<p><h2 style="text-align:center"><b><i>Student Detail</i></b></h2></p> 
		 </div>
	</div>
	<div class="row">
		<div class="col-5 ml-5 "><p>Roll No - <?php echo $data['reg'];?> </p>	</div>
		 </div>
	<div class="row">
		<div class="col-8 ml-5 mb-2">
	<p>			Candidate Name - <?php echo $data['cname'];?><br> </p>
		<p>	Father's Name - <?php echo $data['fname'];?><br> </p>
			<p>Mother's Name - <?php echo $data['mname'];?> <br></p>
	
	<p>		Date Of Birth -  <?php echo $data['dob'];?><br></p>
		<p>	Adhaar Number - <?php echo $data['adhar'];?><br></p>
	<p>		Mobile Number -  <?php echo $data['mob'];?><br></p>
		<p>	E-mail Adress - <?php echo $data['email'];?><br>
</p>
<p>	Adress - <?php echo $data['vill'];?>,<?php echo $data['block'];?>,<?php echo $data['dist'];?><br></p>
		</div>
		<div class="col-2 my-0  "> <img src="images/<?php echo $data['img'];?>" class="border mx-auto" id="p" height="200px" width="200px"><img src="signature/<?php echo $data['sign'];?>" class=" border mx-auto mt-2" id="s" width=" 200px" height="50px">
		</div>
	</div>
	<div class="row mx-auto m-3 text-nowrap border">
		<div class="col-12 ">
		   	<h3 class="text-nowrap">Cerrent Year Education Detail</h3>
		   </div>
	</div>
	<div class="row">
		<div  class="col-5 ml-5 ">
		<p>	Class Name - <?php echo $data['cclass'];?><br></p>
		<p>	College Name - <?php echo $data['collname'];?><br></p>
		<p>	Board/University Name - <?php echo $data['board'];?><br></p>
		<p>	Learn Subject Name - <?php echo $data['lsub'];?><br></p>
	 </div>
		<div class="col-2 my-0">
			Aadhaar Image :-
		</div>
			<div class="col-2 my-0">		
			<img src="adhar/<?php echo $data['afimg'];?>" class="mg" width="350px" height="130px">	<br>
			<img src="adhar/<?php echo $data['abimg'];?>" class="mt-2" width="350px" height="130px">
						
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
 else
 {
 	?>
	  <!--  <script type="text/javascript">
      	  window.open('userlogin12.php','_self'); 
      	   alert('Please enter correct name and password.');
       </script> -->
    <?php
 }

?>