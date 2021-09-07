<?php
   $name = $_POST['name']."<br>";
   $sname =  $_POST['sname']."<br>";
   $mn =  $_POST['mn']."<br>";
   $gender =  $_POST['gender']."<br>";
   $email =  $_POST['email']."<br>";
   $dt =  $_POST['dt']."<br>";
   $sl =  $_POST['sl']."<br>";
   $pass =  $_POST['pass']."<br>";
   
   $conn = mysqli_connect('localhost','root','','regdb');
   
   $query = "INSERT INTO `registerdb`(`name`, `sname`, `mn`, `gender`, `email`, `dt`, `sl`, `pass`) VALUES ('$name','$sname','$mn','$gender','$email','$dt','$sl','$pass')";
   
   $run = mysqli_query($conn,$query);

if($run == TRUE)
 {
    echo "Registation Successfully";
   
 }
 else
   {
     echo "Error......";

   }


?>