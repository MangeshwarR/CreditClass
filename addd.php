 
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
			<div class="col-md-6 border-primary text-danger  btn">
				<div class="row  justify-content-center	">
				  <img src="ci.png" alt="" width="50px"  height="50px">
				  <h1>CREDIT INSTITUTE</h1>
			   </div> 
		   </div>
		   <div class="col-md-6 text-center bg-danger text-white">
		   	  <h2>Admission Form </h2>
		    </div>
		  </div>
	   </div>
</header>

	<!-- here start the form -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 bg-warning">
				<form class="form-group" action="add.php" method="post" enctype="multipart/form-data">

					<label for="fname">Candidate Name</label>
					 <div class="form-group">
			<input type="text" class="form-control " id="fname" name="cname" placeholder="Your Name" required="required">
		</div>

			<div class="form-group">
			<label for="fathern">Father's Name</label>
			<div class="input-group-prepend">
				<span class="input-group-text">Shri</span>
				<input type="text" class="form-control" id="fathern" name="fname" placeholder="Your Father's Name" required="required">
			</div>
			</div>
		<div class="form-group">
			<label for="mname">Mother's Name</label>
			<div class="input-group-prepend">
				<span class="input-group-text">Shrimati</span>
			<input type="text" class="form-control" id="mname" name="mname" placeholder=" Your Mother's Name"  required="required">
		</div>
        <div class="form-group">
	<label for="gender">Gender</label>
	<select id="gender" name="gender" class="custom-select"  required="required"> 
		       <option> Select</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				 
			</select>
</div> 
			<div class="form-group">
			<label for="address">Address</label>

			<div class="row">
				<div class="col-md-4 mb-2">
					<input type="text" class="form-control" id="address" name="vill" placeholder="vill/town" required="required">
 
				</div>
				<div class="col-md-4 mb-2">
					<input type="text" class="form-control" id="address" name="block" placeholder="Post" required="required">
 
				</div>
				<div class="col-md-4 mb-2">
					<input type="text" class="form-control" id="address" name="dist" placeholder="dist" required="required">
 
				</div>
			</div>

			<div class="form-group">
			<label for="address">Date of birth</label>

			<div class="row">
				<div class="col-md-12 mb-2">
					<input type="date" class="form-control" id="address" name="dob" placeholder="day" required="required">
 
				</div>
			</div>
		</div>

	<div class="form-group">
		<label for="adh">Aadhaar</label>
			<input type="text" id="adh" class="form-control" name="adhar" placeholder="Enter Adhar 12 digit"  required="required">
	</div>
	<div class="form-group">
		<label for="adh">Uploade front page image</label>
			<input type="file" id="adh" class="form-control" name="afimg"  required="required">
	</div>
	<div class="form-group">
		<label for="adh" class="text-danger">Maximum size 100 Kb.</label>
	</div>
	<div class="form-group">
		<label for="adh">Uploade back page image</label>
			<input type="file" id="adh" class="form-control" name="abimg" required="required" >
	</div>
	<div class="form-group">
		<label for="adh" class="text-danger">Maximum size 100 Kb.</label>
	</div>
<div class="form-group">
	<label for="mob">Mobile no</label>
			<input type="text" name="mob" class="form-control" id="mob" placeholder="Enter mob 10 digit" required="required">

</div>

<div class=" form-group">
	<label for="email">Email Address</label>
			<input type="text"  id="email" class="form-control" name="email" placeholder="ccc@gmail.com" required="required">
</div>
<h3>Previous Year Educational Detail </h3>


<div class="form-group">
	<label for="class">Class Name</label>
	<select id="class"
	class="custom-select" name="class" required="required">
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
	<select id="trade" name="trade" class="custom-select" required="required"> 
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
					<label for="obmark">Obtain Mark</label><input type="text" class="form-control" id="address" name="obmark" placeholder="Obtain mark" required="required">
 
				</div>
				<div class="col-md-4 mb-2">
					<label for="tomark">Total Mark<input type="text" class="form-control" id="address" name="tomark" placeholder="total-mark" required="required">
 
				</div>
				<div class="col-md-4 mb-2">
					<label for="year">Passing Year<input type="year" class="form-control" id="year" name="pec" placeholder="Passing year" required="required">
				</div>
			</div>
		</div>

		<h3> Current Year Educational Detail</h3>

		<div class="form-group">
			<label for="college">School/College Name</label>
			<input type="text" class="form-control" id="college" name="collname" placeholder="Enter Your College Name" required="required">
		</div>
		<div class="form-group">
	<label for="cclass">Class Name</label>
	<select id="cclass"
	class="custom-select" name="cclass" required="required">
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
	<select id="ctrade" name="ctrade" class="custom-select" required="required"> 
		       <option> Select</option>
				<option value="Science"> Science</option>
				<option value="art">Art</option>
				<option value="commerce">Commerce</option>
				<option value="Other" >Other</option>
			</select>
</div>
         <div class="form-group">
			<label for="lsub">Learn Subjects</label>
			 <input type="text" class="form-control" id="lsub" name="lsub" placeholder="Enter learn subjects name" required="required">
		</div>
		<div class="form-group">
	<label for="ctrade">Board</label>
	<select id="ctrade" name="board" class="custom-select" required="required"> 
		       <option> Select</option>
				<option value="U.P.Board">UP Board</option>
				<option value="CBSE Board">CBSE Board</option>
				<option value="Other" >Other</option>
			</select>
</div> 
	<div class="form-group">
	<label for="img">Uploade Image</label>
			<input type="file" class="form-control" id="img" name="img" required="required">
   </div>
   <div class="form-group">
		<label for="adh" class="text-danger">Maximum size 100 Kb.</label>
	</div>
<div class="form-group">
	<label for="sing"> Uploade Sing</label>
			<input type="file" class="form-control" id="sign" name="sign" required="required">
</div>
<div class="form-group">
		<label for="adh" class="text-danger">Maximum size 20 Kb.</label>
	</div>
<div class="form-group">
	<label for="pass">Password</label>
			<input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password" required="required">

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
	<!-- <div class="row justify-content-around" >
		<div class="col-md-4 mb-2 col-6">
			<a href="reprint.php"><input type="button"  class="form-control btn bg-primary" name="forget" value="Reprint Form "></a>
	</div> -->
<!-- </div> -->
<!-- there is end -->
				</form>
				
			</div>
			<!-- there start  the side card -->
				
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