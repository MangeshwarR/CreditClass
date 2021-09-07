
	 <?php
if(isset($_POST['submit']))
  $id =  $_POST['id'];
include 'conection.php';
 $sql = "SELECT * FROM `two` WHERE  id='$id'";
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
	<title> </title>
</head>
<body>
<table align="center">
	<tr>
	<th  colspan="3">
       <h1><big>Cr.</big> Credit Commerce Classes</h1><hr/>
   </th>
</tr>
   <tr>
   	<th colspan="3">
	  <h3>ADMISSION FORM</h3><br/>
	</th>
</tr>
	<tr>
		<td>
	Roll No:</td><td colspan="2"><?php echo $data['id'];?></td></tr>
	<tr>
		<td>
		Name:</td><td colspan="2"><?php echo $data['name'];?></td>
	</tr> 
		<!-- </table> -->
			<?php
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


<!-- <table align="center"> -->

<tr>
	<td>Registration No:</td><td><?php echo $data['reg'];?></td>
	 <td rowspan="5"><img  height="150px" width="170px" src="images/<?php echo $data['img'];?>"></td>
</tr>
<tr>
	<td>Candidate's Name:</td><td><?php echo $data['cname'];?></td>
</tr>
<tr>
	<td>Father's Name:</td><td><?php echo $data['fname'];?></td>
</tr>
<tr>
   <td>Mother's Name:</th><td><?php echo $data['mname'];?></th>
</tr>
<tr>
   <td>Gender:</th><td><?php echo $data['gender'];?></th>
</tr>
<tr>
	<td>Mobile No:</th><td> <?php echo $data['mob'];?></td>
	<td rowspan="2"><img  height="50px" width="170px" src="signature/<?php echo $data['sign'];?>"></td>


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
		<td colspan="3"><img  height="150px" width="340px" src="adhar/<?php echo $data['afimg'];?>">
		<img  height="150px" width="340px" src="adhar/<?php echo $data['abimg'];?>"></td>
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
</body>
</html>
<?php

  }
  else
  {
    echo "No Record Found";
    
  }

?>