 <?php 
  if(isset($_POST['roll']))
  {
    	$roll = $_POST['roll'];
   }
 else
  {
  ?>
	  
	 <!DOCTYPE html>
	 <html>
	 <head>
	 	<title></title>
	 </head>
	 <body>
	   <form action="" method="post">
	   	<table>
	   		<tr>
	   			<td>Roll No</td><td><input type="text" name="roll"></td>
	   		</tr>
	   		<tr>
	   			<th colspan="2"><input type="submit" value="Submit" name="submit"></th>
	   		</tr>
	   	</table>
	   </form>
 </body>
 </html>
  <?php
}
?>
 <?php 
    error_reporting(0);
    $name = $_POST['name'];
   $class = $_POST['class'];
   $roll = $_POST['roll'];
   $date = $_POST['date'];
   $month = $_POST['month'];
   $fees = $_POST['fees'];
   $conn = mysqli_connect('localhost','root','','ccc');
   $sql = "INSERT INTO `fees`(`name`,`class`, `roll`, `date`, `month`, `rupees`) VALUES ('$name','$class','$roll','$date','$month','$fees')";
   $run = mysqli_query($conn,$sql);
   if ($run == true)
    {
      
    }
    else 
    {
   	// echo "Error ......";
   }

  ?>
 <?php
//error_reporting(0);
if(isset($_POST['submit']) && isset($_POST['roll']))
{
  $roll =  $_POST['roll'];
 $conn = mysqli_connect('localhost','root','','ccc');
 $sql = "SELECT * FROM `fees` WHERE roll='$roll'";
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
	<td colspan="1"><h1>Current Year Education Fees Detail</h1></td> 
</tr>
<tr>
	<td colspan="2"><hr/></td>
</tr>
<tr>
	<td>Roll No</td><td> <?php echo $data['roll'];?></td>
</tr>
<tr>
	<td>Student Name</td><td> <?php echo $data['name'];?></td>
</tr>
<tr>
	<td>Class</td><td> <?php echo $data['class'];?></td>
</tr>
<tr>
	<td> Payment Date</td><td><?php echo $data['date'];?></td> 
</tr>
<tr>
	<td>Month</td><td><?php echo $data['month'];?></td>
</tr>
<tr>
	 <td>Fees</td> <td><?php echo $data['rupees'];?></td>
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
}
?>