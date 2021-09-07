<?php
//session_start();
// error_reporting(0);
$name = $_POST['name'];
$sname = $_POST['sname'];
$mn = $_POST['mn'];
$email = $_POST['email'];
$dt = $_POST['dt'];
$pass = $_POST['pass'];
$reg = $_POST['reg'];

// $imagename = $_FILES['img']['name'];
// $tempname = $_FILES['img']['tmp_name'];
// move_uploaded_file($tempname,"image/$imagename");
$conn = mysqli_connect('localhost','root','','ccc');
$sql = "UPDATE `regdb` SET `name` = '$name', `fname` = '$sname', `mobile` = '$mn', `email` = '$email', `dob` = '$dt', `pass` = '$pass' WHERE `registation` = $reg;";
// INSERT INTO `regdb`(`name`, `sname`, `mobile`, `gender`, `email`, `dob`, `img`, `pass`) VALUES ('$name','$sname','$mn','$gender','$email','$dt','$imagename','$pass')";
$run = mysqli_query($conn,$sql);
if($run == true)
{
	echo "update";
}
else
{
  echo "Error";	
}