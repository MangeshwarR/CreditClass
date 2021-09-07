<?php
//session_start();
 // error_reporting(1);
// Personal Details
$cname = $_POST['cname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$mn = $_POST['mn'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$adhar = $_POST['adhar'];
$email = $_POST['email'];
$addss = $_POST['addss'];

// Previous year details

// $pclass = $_POST['pclass'];
// $trd = $_POST['trd'];
// $subn = $_POST['subn'];
// $sub = $_POST['sub'];
// $bord = $_POST['bord'];
// $cllname = $_POST['cllname'];



$pass = $_POST['pass'];

$imagename = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"images/$imagename");

$conn = mysqli_connect('localhost','root','','ccc');
$sql ="INSERT INTO `registration`(`registation`, `cname`, `fname`, `mname`, `mobile`, `dob`, `gender`, `adhar`, `email`, `addss`, `img`, `pass`) VALUES ('$cname','$fname','$mname','$mn','$dob','$gender','$adhar','$email','$addss','$imagename','$pass')";

// "INSERT INTO `registration`( `cname`, `fname`, `mname`, `mobile`, `dob`, `gender`, `adhar`, `email`, `addss`, `pclass`, `img`, `pass`) VALUES ('$cname','$fname','$mname','$mn','$dob','$gender','$adhar','$email','$addss','$pclass','$imagename','$pass')";
$run = mysqli_query($conn,$sql);
if($run == true)
{
  echo "Success <br>";
    
}
else
{
   echo "Error";
}

?>
 