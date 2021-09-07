<?php
$roll = $_POST['roll'];
$name = $_POST['name'];
$sname = $_POST['sname'];
$mn = $_POST['mn'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$dt = $_POST['dt'];
$pass = $_POST['pass'];


$imagename = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"./images/$imagename");
$conn = mysqli_connect('localhost','ccc');
$sql = "INSERT INTO `login`(`roll`, `name`, `sname`, `mobile`, `gender`, `email`, `dob`, `img`, `pass`) VALUES  ('$roll','$name','$sname','$mn','$gender','$email','$dt','$imagename',$pass')";



roll`, `name`, `sname`, `mobile`, `gender`, `email`, `dob`, `pass`) VALUES ('$roll','$name','$sname','$mn','$gender','$email','$dt','$pass')";

$run = mysqli_query($conn,$sql);
if($run == true)
{
  echo "Success";
   
   }
else
{
   echo "Error ......";
}

?>
 