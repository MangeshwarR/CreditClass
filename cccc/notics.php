 <?php
	 error_reporting(0);
	$roll = $_POST['roll'];
	$name = $_POST['name'];
	$class = $_POST['class'];
	$notic = $_POST['notic'];
	$conn = mysqli_connect('localhost','root','','ccc');
	$sql = "INSERT INTO `noticdb`(`roll`, `name`, `class`, `notic`) VALUES ('$roll','$name','$class','$notic')";
	// "INSERT INTO `noticdb`(`roll`, `name`, `class`, `notic`) VALUES ('$roll','$name','$class','$notic')";
	$run = mysqli_query($conn,$sql);
	if ($run == true)
	 {
		 // echo "Success";
	}
	 else
	 {
		 // echo "Error.......";
	}

 ?>

<?php
if (isset($_POST['roll']))
 {
	 
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
			<th colspan="2"> <input type="submit" name="submit" value="Submit"></th>
		</tr>
	</table>
</form>
</body>
</html>
<?php
}
?>

<?php 
if (isset($_POST['submit']))
 {
 	$roll = $_POST['roll'];
	$conn = mysqli_connect('localhost','root','','ccc');
	$sql = "SELECT * FROM `noticdb` WHERE roll ='$roll'";
	$run = mysqli_query($conn,$sql);
	 if(mysqli_num_rows($run)>0)
      {
        $data=mysqli_fetch_assoc($run);
     ?>
     <!DOCTYPE html>
     <html>
     <head>
     	<title></title>
     </head>
     <body>
     	<table align="center">
     		<tr>
     			<th colspan="2"><h1>STUDENT NOTIC</h1></th>
     		</tr>
     		<td colspan="2"><hr/></td>
     		<tr>
     			<td>Dear <?php echo $data['name'];?> <?php echo  $data['notic'];?></td>
     		</tr> 
     	</table> 
     </body>
     </html>
     <?php
     }
     
    else
    {
    	echo "No Data Found";
    }  

}


 ?>


<?php
if (isset($_POST['']))
 {
	 error_reporting(0);
	$roll = $_POST['roll'];
	$name = $_POST['name'];
	$class = $_POST['class'];
	$notic = $_POST['notic'];
	$conn = mysqli_connect('localhost','root','','ccc');
	$sql = "INSERT INTO `noticdb`(`roll`, `name`, `class`, `notic`) VALUES ('$roll','$name','$class','$notic')";
	$run = mysqli_query($conn,$sql);
	if ($run == true)
	 {
		 echo "Success";
	}
	 else
	 {
		 echo "Error";
	}
}
 ?>