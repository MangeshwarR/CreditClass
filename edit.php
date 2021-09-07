<!-- <?php
if (isset($_POST['pass']))
  {
 	 
 }
 else
 {

	$conn = mysqli_connect('localhost','root','','ccc');
 	$sql = "SELECT * FROM `addmision`";
 	$run = mysqli_query($conn,$sql);
 	$data=mysqli_fetch_assoc($run);
  ?>
 -->
<?php
 $reg = $_GET['reg'];
 $conn = mysqli_connect('localhost','root','','ccc');
 $sql ="SELECT * FROM `addmision` WHERE reg='$reg'";
 $run = mysqli_query($conn,$sql) ;
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
	<div class="container-fluil">
		<div class="row mt-2">
			<div class="col" id="top-line"></div>
		</div>
	</div>


<header>
	<div class="container">
		<div class="row  mt-1">
			<div class="col-md-6 border-primary bg-success text-danger  btn"><div class="row  justify-content-center	">
				<img src="img/credit.png" alt=""width="50px"  height="50px">
				<h1>Credit Institute</h1>
			</div> 
		</div>
			<div class="col-md-6 text-center bg-danger text-white"><h2>Admission Form </h2> </div>
			


		</div>
	</div>
</header>

	<!-- here start the form -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 bg-warning">
				<form class="form-group" action="edit1.php" method="post" enctype="multipart/form-data">
                 <label for="fname">Roll No</label>
					 <div class="form-group">
			<input type="text" class="form-control " id="fname" name="reg"  value="<?php echo $data['reg'];?>" required="required">
		</div>
					<label for="fname">Candidate Name</label>
					 <div class="form-group">
			<input type="text" class="form-control " id="fname" name="cname"  value="<?php echo $data['cname'];?>" required="required">
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
			<input type="text" class="form-control" id="mname" name="mname"  value="<?php echo $data['mname'];?>" required="required">
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
					<input type="text" class="form-control" id="address" name="vill"  value="<?php echo $data['vill'];?>" required="required">
 
				</div>
				<div class="col-md-4 mb-2">
					<input type="text" class="form-control" id="address" name="block"  value="<?php echo $data['block'];?>" required="required">
 
				</div>
				<div class="col-md-4 mb-2">
					<input type="text" class="form-control" id="address" name="dist"  value="<?php echo $data['dist'];?>" required="required">
 
				</div>
			</div>

			<div class="form-group">
			<label for="address">Date of birth</label>

			<div class="row">
				<div class="col-md-4 mb-2">
					<input type="date" class="form-control" id="address" name="dob"  value="<?php echo $data['dob'];?>" required="required">
 
				</div>
			</div>
		</div>

	<div class="form-group">
		<label for="adh">Aadhaar</label>
			<input type="text" id="adh" class="form-control" name="adhar"  value="<?php echo $data['adhar'];?>" required="required">
	</div>
	<div class="form-group">
		<label for="adh">Uploade front page image</label>
			<input type="file" id="adh" class="form-control" name="afimg"  value="<img  height="150px" width="170px" src="images/<?php echo $data['afimg'];?>" >
	</div>
	<div class="form-group">
		<label for="adh">Uploade back page image</label>
			<input type="file" id="adh" class="form-control" name="abimg"  value="<?php echo $data['abimg'];?>"  >
	</div>
<div class="form-group">
	<label for="mob">Mobile no</label>
			<input type="text" name="mob" class="form-control" id="mob"  value="<?php echo $data['mob'];?>" required="required"">

</div>

<div class=" form-group">
	<label for="email">Email Address</label>
			<input type="text"  id="email" class="form-control" name="email"  value="<?php echo $data['email'];?>" required="required">
</div>
<h3>Previous Year Educational Detail </h3>


<div class="form-group">
	<label for="class">Class Name</label>
	<select id="class"
	class="custom-select" name="class"  value="<?php echo $data['class'];?>">
				<option> Select</option>
	            <option value="9th"> 9 <sup>th</sup></option> 
	            <option value="10th"> 10 <sup>th</sup></option>
				<option value="11th"> 11 <sup>th</sup></option>
				<option value="12th">12 <sup>th</sup></option>
				<option value="B.com I"> B.com I</option>
				<option value="B.com II">B.com II </option>
				<option value="other"> Other</option>
			</select>
	
</div>

<div class="form-group">
	<label for="trade">Trade/Sector</label>
	<select id="trade" name="trade" class="custom-select"  value="<?php echo $data['trade'];?>"> 
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
					<label for="tomark">Total Mark<input type="text" class="form-control" id="address" name="tomark"  value="<?php echo $data['tomark'];?>" required="required">
 
				</div>
				<div class="col-md-4 mb-2">
					<label for="year">Passing Year<input type="year" class="form-control" id="year" name="pec"  value="<?php echo $data['pec'];?>" required="required">
				</div>
			</div>
		</div>

		<h3> Current Year Educational Detail</h3>

		<div class="form-group">
			<label for="college">School/College Name</label>
			<input type="text" class="form-control" id="college" name="collname"  value="<?php echo $data['collname'];?>" required="required">
		</div>
		<div class="form-group">
	<label for="cclass">Class Name</label>
	<select id="cclass"
	class="custom-select" name="cclass"  value="<?php echo $data['cclass'];?>" required="required">
				<option> Select</option>
	            <option value="9th"> 9 <sup>th</sup></option> 
	            <option value="10th"> 10 <sup>th</sup></option>
				<option value="11th"> 11 <sup>th</sup></option>
				<option value="12th">12 <sup>th</sup></option>
				<option value="B.com I"> B.com I</option>
				<option value="B.com II">B.com II </option>
				<option value="other"> Other</option>
			</select>
	
</div>

<div class="form-group">
	<label for="ctrade">Trade/Sector</label>
	<select id="ctrade" name="ctrade" class="custom-select"  value="<?php echo $data['ctrade'];?>" required="required"> 
		       <option> Select</option>
				<option value="Science"> Science</option>
				<option value="art">Art</option>
				<option value="commerce">Commerce</option>
				<option value="Other" >Other</option>
			</select>
</div>
         <div class="form-group">
			<label for="lsub">Learn Subjects</label>
			 <input type="text" class="form-control" id="lsub" name="lsub"  value="<?php echo $data['lsub'];?>" required="required">
		</div>
		<div class="form-group">
	<label for="ctrade">Board</label>
	<select id="ctrade" name="board" class="custom-select"  value="<?php echo $data['board'];?>"> 
		       <option> Select</option>
				<option value="U.P.Board">UP Board</option>
				<option value="CBSE Board">CBSE Board</option>
				<option value="Other" >Other</option>
			</select>
</div> 
	<div class="form-group">
	<label for="img">Uploade Image</label>
			<input type="file" class="form-control" id="img" name="img"  value="<?php echo $data['img'];?>">

</div>
<div class="form-group">
	<label for="sing"> Uploade Sing</label>
			<input type="file" class="form-control" id="sign" name="sign"  value="<?php echo $data['sign'];?>">

</div>
<div class="form-group">
	<label for="pass">Password</label>
			<input type="password" class="form-control" id="pass" name="pass" value="<?php echo $data['pass'];?>" required="required">

</div>





		</div>
<div class="row justify-content-around" >
	<div class="col-md-4 mb-2 col-3">
		<div class="form-group">
			<input type="reset"  class="form-control btn bg-primary" value="Cancel" name="">
		</div>
	</div>
	<!-- <div class="col-md-4 mb-2"></div> -->
	<div class="col-md-4 mb-2 col-5">
		<input type="hidden" value="<?php echo $data['reg'];?>" name="reg" >
			<input type="submit"  class="form-control btn bg-primary" value="Submit" name="submit">
	</div>
	
</div>
	</div>
	<!-- <div class="row justify-content-around" >
		<div class="col-md-4 mb-2 col-6">
			<a href="reprint.php"><input type="button"  class="form-control btn bg-primary" name="forget" value="Reprint Form "></a> 
  	
			 
	</div> -->
</div>
<!-- there is end -->
				</form>
				
			</div>
			<!-- there start  the side card -->
		
	</div>


<script type="text/javascript" src="js/jquery.js"></script>
	<!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>
</body>
</html>
<?php
}
?>


