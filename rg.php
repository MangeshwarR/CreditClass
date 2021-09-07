
<?php

$name = $_POST['name'];
$sname =  $_POST['sname'];
$mn =  $_POST['mn'];
$gender =  $_POST['gender'];
$email =  $_POST['email'];
$dt =  $_POST['dt'];
$sl =  $_POST['sl'];
$pass =  $_POST['pass'];

$conn = mysqli_connect('localhost','root','','regdb');

$query = "INSERT INTO `registerdb`( `name`, `sname`, `mn`, `gender`, `email`, `dt`, `sl`, `pass`) VALUES ('$name','$sname','$mn','$gender','$email','$dt','$sl','$pass')";

$run = mysqli_query($conn,$query);

if($run == TRUE)
{
 echo "Registation  Successfully";

}
else
{
  echo "Error......";

}

?>


