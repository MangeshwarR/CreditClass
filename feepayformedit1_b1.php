<?php
   
$roll=$_POST['roll'];
$name=$_POST['name'];
$month=$_POST['month'];
$dt=$_POST['dt'];
$paid=$_POST['paid'];
$dcount=$_POST['dcount'];
$unpaid=$_POST['unpaid'];
$echarge=$_POST['echarge'];
	include 'conection.php';
 	$sql = "UPDATE `fees_b1` SET `roll`='$roll',`name`='$name',`month`='$month',`dt`='$dt',`paid`='$paid',`dcount`='$dcount',`unpaid`='$unpaid',`echarge`='$echarge' WHERE `roll`='$roll'  ";
 	$run = mysqli_query($conn,$sql);
 	if ($run==true) {
 		 echo "Success";
 	} else {
 		  echo "Error";
 	}
 	
 	 
  ?>