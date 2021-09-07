<?php
// $roll =  $_POST['roll'];
$name =  $_POST['name'];
$fname =  $_POST['fname'];
$mname =  $_POST['mname'];
$mn =  $_POST['mn'];
$adhar =  $_POST['adhar'];
$gender =  $_POST['gender'];
$email =  $_POST['email'];
$dob =  $_POST['dob'];
$vill =  $_POST['vill'];

$pclass =  $_POST['pclass'];
$ptrd =  $_POST['ptrd'];
// $psubn =  $_POST['psubn'];
$pyear =  $_POST['pyear'];
$pboard =  $_POST['pboard'];
$pcollg =  $_POST['pcollg'];

$cclass =  $_POST['cclass'];
$ctrd =  $_POST['ctrd'];
$csubj =  $_POST['csubj'];
$cyear =  $_POST['cyear'];
$cboard =  $_POST['cboard'];
$ccollg =  $_POST['ccollg'];

$pass =  $_POST['pass'];

$imagename = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];
move_uploaded_file($tempname,"images/$imagename");
// move_uploaded_file($tempname,"signature/$imagename");

$conn = mysqli_connect('localhost','root','','stddb');
$query ="INSERT INTO `user`( `cname`, `fname`, `mname`, `mobile`, `adhar`, `gender`, `email`, `dod`, `addss`, `pclass`, `ptrd`, `pyear`, `pboard`, `pcollg`, `cclass`, `ctrd`, `csubj`, `cyear`, `cboard`, `ccollg`, `img`, `pass`) VALUES ( '$name','$fname','$mname','$mn','$adhar','$gender','$email','$dob','$vill','$pclass','$ptrd','$pyear','$pboard','$pcollg','$cclass','$ctrd','$csubj','$cyear','$cboard','$ccollg','$imagename','$pass')";



$run = mysqli_query($conn,$query);
if($run == TRUE)
 {
   
    echo "Data insert Successfully<br>";
    echo "<a href='stud.html'>Insert new data</a><br>";
    echo "<a href='viewdata.php'>View students details</a>";
   
 }
 else
   {
     echo "Error !!!!!";

   }




?>