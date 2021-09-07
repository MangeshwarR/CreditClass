<?php
$roll = $_POST['roll'];
$name = $_POST['name'];
$sname = $_POST['sname'];
$mn = $_POST['mn'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$dt = $_POST['dt'];
$pass = $_POST['pass'];

$conn = mysqli_connect('localhost','root','','ccc');
$sql = "INSERT INTO `logdb`(`roll`, `name`, `sname`, `mobile`, `gender`, `email`, `dt`, `pass`) VALUES  ('$roll','$name','$sname','$mn','$gender','$email','$dt','$pass')";

$run = mysqli_query($conn,$sql);
if ($run == true)
 {
	echo "Success";
} 
else
 {
	echo "Error";
}

?>