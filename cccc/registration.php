<?php
//session_start();
error_reporting(0);
$name = $_POST['name'];
$sname = $_POST['sname'];
$mn = $_POST['mn'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$dt = $_POST['dt'];
$pass = $_POST['pass'];

$imagename = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"image/$imagename");
$conn = mysqli_connect('localhost','root','','ccc');
$sql = "INSERT INTO `regdb`(`name`, `sname`, `mobile`, `gender`, `email`, `dob`, `img`, `pass`) VALUES ('$name','$sname','$mn','$gender','$email','$dt','$imagename','$pass')";
$run = mysqli_query($conn,$sql);
if($run == true)
{
  // echo "Success <br>";
   echo "<a href='view.php'>view</a>";
}
else
{
   //echo "Error";
}

?>

<a href="registation.php">Back</a>
<form action="show.php" method="post">
	<table align="center" border="1px" cellspacing="0" style="margin-top:200px">
		<tr>
			<th colspan="2" bgcolor="red"><h1>Your Detail</h1></th>
		</tr>
		<tr>
			<th>Name</th><td><input type="text" name="name"></td>
		</tr>
		<tr>
            <th>Password</th><td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <th><input type="reset" name="cancle" value="Cancle"></th>
            <th><input type="submit" name="submit" value="Search"></th>
        </tr>
  </table>
</form>
