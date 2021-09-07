
 <?php
 if(isset($_POST['submit']))
{

// include('cstudentedit.php');
  $reg =  $_POST['reg'];
}
$conn = mysqli_connect('localhost','root','','ccc');
 $sql = "INSERT INTO  `class_11` SELECT * FROM `addmision` WHERE  reg='$reg'";
 $run = mysqli_query($conn,$sql);


 if($run == true)
  {
    echo "Successfully";
   }
  else
  {
    echo "error";

  }


?> 
 