 
 	<?php                                          
include "conection.php";
 $reg =$_POST['reg'];
  $sql = "INSERT INTO  `class_11` SELECT * FROM `addmision` WHERE  reg='$reg'";
  $run = mysqli_query($conn,$sql);
  if($run == true)
   {
   	// include "conection.php";
   	$name =$_POST['name'];
   	$adhar =$_POST['adhar'];
       $sql = "SELECT * FROM class_11 WHERE name='$name' AND adhar='$adhar' ";
         $result1 = mysqli_query($conn, $sql) or die("Query Failed 1.");
         $row =mysqli_num_rows($result1);
         $row2= '20201200'+$row ;  
         $query = "UPDATE `class_11` SET `reg`='$row2'";
         $run = mysqli_query($conn,$query) or die("Query Failed2");
         header("Location:cstudentedit.php");                
   }
  else
  {
    echo "error";

  } 
    ?>
 