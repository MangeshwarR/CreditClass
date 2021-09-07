
 <?php
//error_reporting(0);
if(isset($_POST['submit']))
  $name =  $_POST['name'];
$pass =  $_POST['pass'];
 $conn = mysqli_connect('localhost','root','','ccc');
 $sql = "SELECT * FROM `user` WHERE  cname='$name' AND pass='$pass'";
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
a
{
	text-decoration: none;
	color: red;
	font-size: 20px;
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
	  <h3>STUDENT DETAILS</h3><br/>
	</th>
</tr>
<tr>
	<td>Roll No:</td><td><?php echo $data['reg'];?></td>
	 <td rowspan="4"><img  height="100px" width="100px" src="images/<?php echo $data['img'];?>"></td>
</tr>
<tr>
	<td>Student Name:</td><td><?php echo $data['cname'];?></td>
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
	<td colspan="3"><hr/></td>
</tr>
<tr>
	<td><a href='fees.php'>Fees Detail</a></td><td><a href='check.php'>Attandence Detail</a></td><td><a href='notics.php'>Persion Notic</a></td>
</tr>
<tr>
	<td colspan="3"><hr/></td>
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