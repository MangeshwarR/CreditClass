<?php 
include 'sedestroy.php';
$reg= $_SESSION["regno"];
$aadhar=$_SESSION['useradhar'];                                
  
include "conection.php";
  
  $sql = "SELECT adhar FROM class_11 WHERE adhar = '$aadhar'";
 $result1 = mysqli_query($conn, $sql) or die("Query Failed.");
  if(mysqli_num_rows($result1) > 0)
  {
                     
   echo '<div class="alert alert-danger">This student record already exist Please check class table & retry again.</div>';
      header("Location: {$hostname}/c1.php");              
  }
                             
   else
   {
 $sql2 = "INSERT INTO  `class_11` SELECT * FROM `addmision` WHERE  reg='$reg'";
 $result2 = mysqli_query($conn,$sql2)or die('Query Failed') ;
 if($result2 == TRUE)
 {
 	?>
 	<!-- <script type="text/javascript"> -->
 		<!-- alert('New Student record Upload Successfully.'); -->
 		<!-- // window.open('cstudent.php?reg=<?php echo $reg; ?>','_self'); -->
 	<!-- </script> -->
 	<?php
 	 header("Location:c4.php");
   }
 else
   {
     echo "Error !!!!!";

   }

}


 ?>