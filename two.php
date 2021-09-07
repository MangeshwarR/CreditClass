<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
	Roll no<input type="text" name="roll"><br>
	Name<input type="text" name="name"><br>
	<input type="submit" name="submit" value="Submit"><br>
	</form>
</body>
</html>
<?php
$roll =$_POST['roll'];
$name =$_POST['name'];
 include 'conection.php';
$query ="INSERT INTO `two`(`roll`, `name`) VALUES ('$roll','$name')";
$run = mysqli_query($conn,$query);
if($run == TRUE)
 {
   // echo "<script> alert('Your Registration Successfully')</script>";
    echo "Data insert Successfully";
    // echo "<a href='stud.html'>Insert new data</a><br>";
    // echo "<a href='viewdata.php'>View students details</a>";
   }
 else
   {
     echo "Error !!!!!";

   }




?>