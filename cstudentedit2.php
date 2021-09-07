<?php 
$id=$_GET['id'];
include 'conection.php';
$sql="SELECT * FROM `class_11` WHERE reg='$id'";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<title> navbar</title>
	 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	<div class="container-fluil ">
		<div class="row mt-2">
			<div class="col" id="top-line"></div>
		</div>
</div>
<header>
	<div class="container">
		<div class="row  mt-1">
			<div class="col-md-6 border-primary text-danger  btn"><div class="row  justify-content-center	">
				<img src="ci.png" alt="" width="50px"  height="50px">
				<h1>CREDIT INSTITUTE</h1>
			</div> 
		</div>
			<div class="col-md-6 text-center bg-danger text-white"><h2>Admission Form </h2> </div>
		</div>
	</div>
</header>
	<div class="container">
		<div class="row">
			<div class="col-md-8 bg-warning">
				<form class="form-group" action="" method="post" enctype="multipart/form-data">

					<label for="fname">Candidate Name</label>
					 <div class="form-group">
			<input type="text" class="form-control " id="fname" name="cname" value="<?php echo $data['cname'];?>" required="required">
		</div>

			<div class="form-group">
			<label for="fathern">Father's Name</label>
			<div class="input-group-prepend">
				<span class="input-group-text">Shri</span>
				<input type="text" class="form-control" id="fathern" name="fname"  value="<?php echo $data['fname'];?>" required="required">
			</div>
			</div>
		<div class="form-group">
			<label for="mname">Mother's Name</label>
			<div class="input-group-prepend">
				<span class="input-group-text">Shrimati</span>
			<input type="text" class="form-control" id="mname" name="mname"  value="<?php echo $data['mname'];?>"  required="required">
		</div>
        <div class="form-group">
	<label for="gender">Gender</label>
	<select id="gender" name="gender" class="custom-select"  value="<?php echo $data['gender'];?>" required="required"> 
		       <option> Select</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				 
			</select>
</div> 
			<div class="form-group">
			<label for="address">Address</label>

			<div class="row">
				<div class="col-md-4 mb-2">
					<input type="text" class="form-control" id="address" name="vill" value="<?php echo $data['vill'];?>" required="required">
 
				</div>
				<div class="col-md-4 mb-2">
					<input type="text" class="form-control" id="address" name="block"  value="<?php echo $data['block'];?>" required="required">
 
				</div>
				<div class="col-md-4 mb-2">
					<input type="text" class="form-control" id="address" name="dist" value="<?php echo $data['dist'];?>" required="required">
 
				</div>
			</div>

			<div class="form-group">
			<label for="address">Date of birth</label>

			<div class="row">
				<div class="col-md-12 mb-2">
					<input type="date" class="form-control" id="address" name="dob" value="<?php echo $data['dob'];?>" required="required">
 
				</div>
			</div>
		</div>
	  
<div class="form-group">
	<label for="mob">Mobile no</label>
			<input type="text" name="mob" class="form-control" id="mob"  value="<?php echo $data['mob'];?>" required="required">

</div>

<div class=" form-group">
	<label for="email">Email Address</label>
			<input type="text"  id="email" class="form-control" name="email"  value="<?php echo $data['email'];?>" required="required">
</div>
<h3>Previous Year Educational Detail </h3>


<div class="form-group">
	<label for="class">Class Name</label>
	<select id="class"
	class="custom-select" name="class"  value="<?php echo $data['class'];?>" required="required">
				<option> Select</option>
	            <option value="9th"> 9 <sup>th</sup></option> 
	            <option value="10th"> 10 <sup>th</sup></option>
				<option value="11th"> 11 <sup>th</sup></option>
				<option value="12th">12 <sup>th</sup></option>
				<option value="B.com I"> B.com I</option>
				<option value="B.com II">B.com II </option>
				<option value="B.com III"> B.com III</option>
				<option value="M.com I">M.com I </option>
				<option value="M.com II">M.com II </option>
				<option value="other"> Other</option>
			</select>
	
</div>

<div class="form-group">
	<label for="trade">Trade/Sector</label>
	<select id="trade" name="trade" class="custom-select" value="<?php echo $data['trade'];?>" required="required"> 
		       <option> Select</option>
				<option value="Science"> Science</option>
				<option value="art">Art</option>
				<option value="commerce">Commerce</option>
				<option value="Other" >Other</option>
			</select>
</div>
<div class="form-group">
			<label for="result">Result:----</label>

			<div class="row ">
				<div class="col-md-4 mb-2">
					<label for="obmark">Obtain Mark</label><input type="text" class="form-control" id="address" name="obmark"  value="<?php echo $data['obmark'];?>" required="required">
 
				</div>
				<div class="col-md-4 mb-2">
					<label for="tomark">Total Mark<input type="text" class="form-control" id="address" name="tomark" value="<?php echo $data['tomark'];?>" required="required">
 
				</div>
				<div class="col-md-4 mb-2">
					<label for="year">Passing Year<input type="year" class="form-control" id="year" name="pec" value="<?php echo $data['pec'];?>" required="required">
				</div>
			</div>
		</div>

		<h3> Current Year Educational Detail</h3>

		<div class="form-group">
			<label for="college">School/College Name</label>
			<input type="text" class="form-control" id="college" name="collname" value="<?php echo $data['collname'];?>" required="required">
		</div>
		<div class="form-group">
	<label for="cclass">Class Name</label>
	<select id="cclass"
	class="custom-select" name="cclass" value="<?php echo $data['cclass'];?>" required="required">
				<option> Select</option>
	            <option value="9th"> 9 <sup>th</sup></option> 
	            <option value="10th"> 10 <sup>th</sup></option>
				<option value="11th"> 11 <sup>th</sup></option>
				<option value="12th">12 <sup>th</sup></option>
				<option value="B.com I"> B.com I</option>
				<option value="B.com II">B.com II </option>
				<option value="B.com III"> B.com III</option>
				<option value="M.com I">M.com I </option>
				<option value="M.com II">M.com II </option>
				<option value="other"> Other</option>
			</select>
	
</div>

<div class="form-group">
	<label for="ctrade">Trade/Sector</label>
	<select id="ctrade" name="ctrade" value="<?php echo $data['ctrade'];?>" class="custom-select" required="required"> 
		       <option> Select</option>
				<option value="Science"> Science</option>
				<option value="art">Art</option>
				<option value="commerce">Commerce</option>
				<option value="Other" >Other</option>
			</select>
</div>
         <div class="form-group">
			<label for="lsub">Learn Subjects</label>
			 <input type="text" class="form-control" id="lsub" name="lsub" value="<?php echo $data['lsub'];?>" required="required">
		</div>
		<div class="form-group">
	<label for="ctrade">Board</label>
	<select id="ctrade" name="board" value="<?php echo $data['board'];?>" class="custom-select" required="required"> 
		       <option> Select</option>
				<option value="U.P.Board">UP Board</option>
				<option value="CBSE Board">CBSE Board</option>
				<option value="Other" >Other</option>
			</select>
</div> 
 </div>
<div class="row justify-content-around" >
	<div class="col-md-4 mb-2 col-3">
		<div class="form-group">
			<input type="reset"  class="form-control btn bg-danger" value="Cancle" name="">
		</div>
	</div>
	<!-- <div class="col-md-4 mb-2"></div> -->
	<div class="col-md-4 mb-2 col-5">
			<input type="submit"  class="form-control btn bg-primary" value="Submit" name="submit">
	</div>
	
</div>
	</div>
	 
				</form>
				
			</div>
			 
				
				<div class="col-md-4 shadow-lg">
			<div class="card">                                        
				<img src="ca11.jpg"  class="card-img-top">
				<div class="card-body  card-img-overlay">
					<h4 class="card-title"> Admission Procedure</h4>
				</div>
				<div class="card-body"> 
					<h5 class="card-title">Admission Procedure</h5>
					<!-- <p class="card-text"></p> -->
					<ul> 
						<li>
							First fill the admission-form on-line.
						</li>
						<li>After submit get hard-copy of this form.</li>
						<li>Submit the hard-copy to the Credit Academy,by hand/by post.</li>
						<li>Then your admission is successful.</li>
					</ul>
				</div>
			</div>
			<!-- there card 2 -->
			<div class="card">                                        
				<img src="ca12.jpg"  class="card-img-top">
				<div class="card-body  card-img-overlay">
					<h4 class="card-title"> Admission Procedure</h4>
				</div>
				<div class="card-body"> 
					<h5 class="card-title">Login-Page</h5>
					<!-- <p class="caed-text"></p> -->
					<ul>
						<li>After submit the form you get the Credit Student ID.</li>
						<li>Using this CSID number, you can login student-page .  </li>
						<li> After login you get see your all information as fee-status, test-result,
						class-attend-detail and more.</li>
					</ul>
				</div>
			</div>

			<div class="card">                                        
				<img src="ca13.jpg"  class="card-img-top">
				<div class="card-body  card-img-overlay">
					<h4 class="card-title"> Admission Procedure</h4>
				</div>
				<div class="card-body"> 
					<h5 class="card-title">Be Alert & Care</h5>
					<!-- <p class="caed-text"></p> -->
					<ul>
						<li>Secure your registration-no, this is used reprint the form.</li>
						<li>Fill all the information right & clean.</li>
						<li>For any mis-take in registration-form inform the Institute with hard-copy.  </li>
					</ul>
				</div>
			</div>
			


		<!-- end of col -->
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
if (isset($_POST['submit'])) 
{
$reg =  $_POST['reg'];
$cname =  $_POST['cname'];
$fname =  $_POST['fname'];
$mname =  $_POST['mname'];
$gender =  $_POST['gender'];
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
include 'conection.php';
$query ="UPDATE `class_11` SET `cname`='$cname',`fname`='$fname',`mname`='$mname', `gender`='$gender', `vill`='$vill', `block`='$block', `dist`='$dist', `dob`='$dob', `adhar`='$adhar', `mob`='$mob', `email`='$mob', `class`='$class', `trade`='$trade', `obmark`='$obmark', `tomark`='$tomark', `pec`='$pec', `collname`='$collname', `cclass`='$cclass', `ctrade`='$ctrade', `lsub`='$lsub', `board`='$board'  WHERE `reg`='$reg'";
 // -- `reg`='$reg',`cname`='$cname',`fname`='$fname',`mname`='$mname' WHERE `reg`='$reg'";
$run = mysqli_query($conn,$query);
if($run == TRUE)
 {
 	?>
 	<script type="text/javascript">
 		alert('Roll No Uploaded Successfully.');
 		window.open('cstudent.php?reg=<?php echo $reg; ?>','_self');
 	</script>
 	<?php
   }
 else
   {
     echo "Error !!!!!";

   }
}

?>