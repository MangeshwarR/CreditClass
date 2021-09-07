<?php
   // include('head.php');
  ?>
<?php
// $roll =  $_POST['roll'];
$name =  $_POST['name'];
$fname =  $_POST['fname'];
$mname =  $_POST['mname'];
$mn =  $_POST['mn'];
$adhar =  $_POST['adhar'];
$gender =  $_POST['gender'];
$email =  $_POST['email'];
$dob =  $_POST['dob'];
$vill =  $_POST['vill'];

$pclass =  $_POST['pclass'];
$ptrd =  $_POST['ptrd'];
// $psubn =  $_POST['psubn'];
$pyear =  $_POST['pyear'];
$pboard =  $_POST['pboard'];
$pcollg =  $_POST['pcollg'];

$cclass =  $_POST['cclass'];
$ctrd =  $_POST['ctrd'];
$csubj =  $_POST['csubj'];
$cyear =  $_POST['cyear'];
$cboard =  $_POST['cboard'];
$ccollg =  $_POST['ccollg'];

$pass =  $_POST['pass'];

$imagename = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"images/$imagename");
// move_uploaded_file($tempname,"signature/$imagename");

$conn = mysqli_connect('sql305.epizy.com','epiz_26349909','BTz5jctOYfQ','epiz_26349909_ccc');
$query ="INSERT INTO `user`( `cname`, `fname`, `mname`, `mobile`, `adhar`, `gender`, `email`, `dod`, `addss`, `pclass`, `ptrd`, `pyear`, `pboard`, `pcollg`, `cclass`, `ctrd`, `csubj`, `cyear`, `cboard`, `ccollg`, `img`, `pass`) VALUES ( '$name','$fname','$mname','$mn','$adhar','$gender','$email','$dob','$vill','$pclass','$ptrd','$pyear','$pboard','$pcollg','$cclass','$ctrd','$csubj','$cyear','$cboard','$ccollg','$imagename','$pass')";



$run = mysqli_query($conn,$query);
if($run == TRUE)
 {
   
    // echo "Data insert Successfully<br>";
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
 $sql = "SELECT * FROM `user` WHERE  pass='$pass'";
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
	<title>Out of the admission form </title>
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
	<td>Registration No:</td><td><?php echo $data['reg'];?></td>
	 <td rowspan="4"><img  height="100px" width="100px" src="images/<?php echo $data['img'];?>"></td>
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
	<td>Mobile No:</th><td> <?php echo $data['mobile'];?></td><td></td>
</tr>
<tr>
	<td>Adhar No:</th><td colspan="2"> <?php echo $data['adhar'];?></td>
</tr>
<tr>
	<td>Gender:</th><td colspan="2"> <?php echo $data['gender'];?></td>
</tr>
<tr>
	<td>G-mail:</th><td colspan="2"> <?php echo $data['email'];?></td>
</tr>
<tr>
	<td>Date of Birth:</td><td colspan="2"> <?php echo $data['dod'];?></td>
</tr>
<tr>
	<td>Address:</td><td colspan="2"> <?php echo $data['addss'];?></td>
</tr>
 
<tr>
	<th colspan="3"><h3>Previous Year Education Detail</h3><hr/></th> 
</tr>
<tr>
	<td>Class:</td><td colspan="2"> <?php echo $data['pclass'];?></td>
</tr>
<tr>
	<td>Trade:</td><td colspan="2"> <?php echo $data['ptrd'];?></td>
</tr>
<tr>
	<td>Passing Year:</td><td colspan="2"> <?php echo $data['pyear'];?></td>
</tr>
<tr>
	<td>Board:</td><td colspan="2"> <?php echo $data['pboard'];?></td>
</tr>
<tr>
	<td>School/College Name:</td><td colspan="2"> <?php echo $data['pcollg'];?></td>
</tr>
<tr>
	<th colspan="3"><h3>Current Year Education Detail</h3><hr/></th> 
</tr>
<tr>
	<td>Class:</td><td colspan="2"> <?php echo $data['cclass'];?></td>
</tr>
<tr>
	<td>Trade:</td><td colspan="2"> <?php echo $data['ctrd'];?></td>
</tr>
<tr>
	<td>Learn Subjects:</td><td colspan="2"> <?php echo $data['csubj'];?></td>
</tr>
<tr>
	<td>Year:</td><td colspan="2"> <?php echo $data['cyear'];?></td>
</tr>
<tr>
	<td>Board:</td><td colspan="2"> <?php echo $data['cboard'];?></td>
</tr>
<tr>
	<td>School/College Name:</td><td colspan="2"> <?php echo $data['ccollg'];?></td>
</tr>
<tr>
	<th colspan="3">
		I <?php echo $data['cname'];?> s/o <?php echo $data['fname'];?> declare that all the information given by me best of my knowledge.</th>
 </tr>
 <tr>
 	<th colspan="3"> Parent's Signature:   ______________________________</th>
 </tr>

<tr >
	<th colspan="3">
 <h1><big>Cr.</big> Credit Commerce Classes</h1>
</th>
</tr>
<tr>
	<td colspan="3">Dear <?php echo $data['cname'];?> your Admission is success</th>
</tr>
<tr>
<td>Registration No:</td><td> <?php echo $data['reg'];?></td> <td rowspan="3"><img  height="100px" width="100px" src="images/<?php echo $data['img'];?>"></td>
</tr>
<tr>
	<td>Roll No:</td> <td> <?php echo $data['reg'];?></td>
</tr>
<tr>
<td>Subject Name:</td> <td> <?php echo $data['csubj'];?></td>
</tr>
<tr>
	<th colspan="3"><h3> Authorization</h3> </th>
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