   <?php
 session_start();
 $reg= $_SESSION["userreg"];    
        $adhar=  $_SESSION["useradhar"];
	include 'conection.php';
 	$sql = "SELECT * FROM `class_b2`";
 	$run = mysqli_query($conn,$sql) or die('error');
 	$data =mysqli_num_rows($run);
 	$add= '20200'+$data ;   
     $sql1 = " UPDATE `class_b2` SET `reg`='$add' WHERE `adhar`='$adhar'";
	     $run1 = mysqli_query($conn,$sql1) or die('error1');
	     header('Location:cstudentedit_b2.php');
	 
  ?>
 