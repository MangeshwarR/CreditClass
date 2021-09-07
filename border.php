<?php

 // error_reporting(0);
if(isset($_POST['submit']))
$name =  $_POST['name'];
$pass =  $_POST['pass'];
$conn = mysqli_connect('localhost','root','','ccc');
 $sql = "SELECT * FROM `addmision` WHERE cname='$name' AND pass='$pass'";
 $run = mysqli_query($conn,$sql);


 if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-fluil">
<!-- <div class="container mb-5"> -->
	<!-- <h2 class="py-3 text-center">Bootstrap Border & Shadow-sm Classes</h2> -->
	<div class="row py-5">
		<div class="col-md-8 mx-auto">
			<div id="box" class="border shadow-lg ">
				<!-- <div class="row">
		<div class="col-md-5 mx-auto"></div> -->

		<div class="row p-5 lg-5">
			 <div class="col-12 py-3">
			 	 <h1 style="text-align:center"><i><big>Cr.</big> Credit Commerce Classes</i></h1> 
			 </div>
			 <div class="col-12 py-3">
			  <h3 style="text-align:center"><i>ADDMISION FORM</i></h3><br/>
			</div>
			 <div class="col-md-3 py-3">
			 <h6 style="text-align:center">Roll No :<br> 
			 Name :  <br>
			 Father's Name : <br>
			 Mother's Name :<br>
			 Gender :<br>
			 Mobile No :<br>
		     Adhar No :<br>
			 Email :<br>
			 Date of birth :
             </h6>
			</div>
			<div class="col-md-3 py-3">
				 <h6 style="text-align:center"><?php echo $data['reg'];?><br>
				<?php echo $data['cname'];?><br>
				<?php echo $data['fname'];?><br>
				<?php echo $data['mname'];?><br>
				<?php echo $data['gender'];?><br>
				<?php echo $data['mob'];?><br>
				<?php echo $data['adhar'];?> <br>
			<?php echo $data['email'];?><br>
			<?php echo $data['dob'];?> </h6> 
			</div>
			<div class="col-md-3 px-3">
				<img  height="150px" width="170px" src="images/<?php echo $data['img'];?>"><br>
				
				<img  height="50px" width="170px" src="signature/<?php echo $data['sign'];?>">
			</div>
		</div>
		<div class="row p-5 lg-5 m-0">
			 <div class="col-md-5 ">
			 	 <img  height="150px" width="400px" src="adhar/<?php echo $data['afimg'];?>">
			 	</div>
		 <div class="col-md-5 ">
			  	<img  height="150px" width="400px" src="adhar/<?php echo $data['abimg'];?>"> 
			  </div>
		</div>
		 <table class="table table-striped  table-bordered-0">
		 	  <tr>
	<th  colspan="3" class="bg-primary">
       <h1 style="text-align:center"><big>Cr.</big> Credit Commerce Classes</h1> 
   </th>
</tr>
   <tr>
   	<th colspan="3">
	  <h3 style="text-align:center">ADMISSION FORM</h3><br/>
	</th>
</tr>
<tr>
	<td>Registration No:</td><td><?php echo $data['reg'];?></td>
	 <td rowspan="3"><img  height="150px" width="170px" src="images/<?php echo $data['img'];?>" style="text-align:center"></td>
</tr>
<tr>
	<td>Candidate's Name:</td><td><?php echo $data['cname'];?></td>

</tr>
<tr>
	<td>Father's Name:</td><td><?php echo $data['fname'];?></td>
</tr>
<tr>
   <td>Mother's Name:</th><td><?php echo $data['mname'];?></th>
   	<td rowspan="2"><img  height="50px" width="170px" src="signature/<?php echo $data['sign'];?>"></td>

</tr>
<tr>
   <td>Gender:</th><td colspan="2"><?php echo $data['gender'];?></th>
</tr>
<tr>
	<td>Mobile No:</th><td colspan="2"> <?php echo $data['mob'];?></td>
	<!-- <td rowspan="2"><img  height="50px" width="170px" src="signature/<?php echo $data['sign'];?>"></td> -->


</tr>
<tr>
	<td>Adhar No:</th><td colspan="2"> <?php echo $data['adhar'];?></td>
	
</tr>

<tr>
	<td>G-mail:</th><td> <?php echo $data['email'];?></td>
</tr>
<tr>
	<td>Date of Birth:</td><td colspan="2"> <?php echo $data['dob'];?></td>
</tr>
	<td colspan="3">Address:------</td> 
</tr>

<tr>
	<td>Village</td><td colspan="2"> <?php echo $data['vill'];?></td>
</tr>
 	<td>Block</td><td colspan="2"> <?php echo $data['block'];?></td>
</tr>
	<td>District</td><td colspan="2"> <?php echo $data['dist'];?></td>
</tr>
<tr>
  <td colspan="3">Aadhaar Image -------</td>
<tr>
	<tr>
		<td colspan="3" class="p-6"><img  height="150px" width="400px" src="adhar/<?php echo $data['afimg'];?>">
		<img  height="150px" width="400px" src="adhar/<?php echo $data['abimg'];?>"></td>
	</tr>
	<th colspan="3"><h3>Previous Year Education Detail</h3><hr/></th> 
</tr>
<tr>
	<td>Class</td><td colspan="2"> <?php echo $data['class'];?></td>
</tr>
<tr>
	<td>Trade</td><td colspan="2"> <?php echo $data['trade'];?></td>
</tr>
<tr>
	<td>Passing Year</td><td colspan="2"> <?php echo $data['pec'];?></td>
</tr>
<tr>
	<td colspan="3">Result:------</td> 
</tr>
<tr>
	<td>Obtain Mark</td><td colspan="2"> <?php echo $data['obmark'];?></td>
</tr>
<tr>
	<td>Total Mark</td><td colspan="2"> <?php echo $data['tomark'];?></td>
</tr>
<tr>
	<th colspan="3"><h3>Current Year Education Detail</h3><hr/></th> 
</tr>
<tr>
	<td>School/College Name</td><td colspan="2"> <?php echo $data['collname'];?></td>
</tr>
<tr>
	<td>Class</td><td colspan="2"> <?php echo $data['cclass'];?></td>
</tr>
<tr>
	<td>Trade</td><td colspan="2"> <?php echo $data['ctrade'];?></td>
</tr>
<tr>
	<td>Learn Subjects</td><td colspan="2"> <?php echo $data['lsub'];?></td>
</tr>
<tr>
	<td>Board</td><td colspan="2"> <?php echo $data['board'];?></td>
</tr>
<tr>
	<th colspan="3">
		I <?php echo $data['cname'];?> s/o <?php echo $data['fname'];?> declare that all the information given by me best of my knowledge.</th>
 </tr>
 <tr>
 	<th colspan="3"> Parent's Signature:   ______________________________</th>
 </tr>
 
<tr>
	<th colspan="3"> Authorized Signature:   ______________________________</th>
</tr>
 </table>
	</form>	
	</div>

			</div>
		</div>
	</div>
</body>
</html>
<?php

  }
  else
  {
    echo "No Record Found";
    
  }

?>