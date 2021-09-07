<?php 
include 'sedestroy.php';
$reg= $_SESSION["regno"];
$aadhar=$_SESSION['useradhar'];                                
                                  
include "conection.php";
// include "config.php";
                                  
  $sql = "SELECT reg,adhar FROM class_11";
 $result1 = mysqli_query($conn, $sql) or die("Query Failed 1.");
  
$row =mysqli_num_rows($result1);
$row2= '20201200'+$row ;                  
  // echo $row2;
$query = "UPDATE `class_11` SET `reg`='$row2' WHERE adhar={$aadhar}";
$run = mysqli_query($conn,$query) or die("Query Failed2");
 header("Location:$hostname/c1.php");
 ?>