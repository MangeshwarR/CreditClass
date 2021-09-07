<?php
   // include('head.php');
  ?>
<?php
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
$conn = mysqli_connect('localhost','root','','ccc');
$query ="INSERT INTO `addmision`(`roll`,`cname`,`fname`, `mname`, `gender`, `vill`, `block`, `dist`, `dob`, `adhar`, `afimg`, `abimg`, `mob`, `email`, `class`, `trade`, `obmark`, `tomark`, `pec`, `collname`, `cclass`, `ctrade`, `lsub`, `board`, `img`, `sign`, `pass`) VALUES ( '$reg','$cname','$fname','$mname','$gender','$vill','$block','$dist','$dob','$adhar','$afimage','$abimage','$mob','$email','$class','$trade','$obmark','$tomark','$pec','$collname','$cclass','$ctrade','$lsub','$board','$imagename','$sign','$pass' )";



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
//error_reporting(0);
if(isset($_POST['submit']))
  $pass =  $_POST['pass'];
$conn = mysqli_connect('localhost','root','','ccc');
 $sql = "SELECT * FROM `edit` WHERE  pass='$pass'";
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
	<td>Roll No:</td><td><?php echo $data['roll'];?></td>
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
  
</table>
</body>
</html>
<?php

  }
  // else
  {
    // echo "No Record Found";
    
  }

?>