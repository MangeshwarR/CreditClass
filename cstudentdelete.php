<?php
$reg =  $_REQUEST['reg'];
include 'conection.php';
$query ="DELETE FROM `class_11` WHERE `reg`='$reg'";
$run = mysqli_query($conn,$query);
if($run == TRUE)
 {
 	?>
 	<script type="text/javascript">
 		alert('Student Data Delete Successfully.');
 		window.open('cstudent.php?reg=<?php echo $reg; ?>','_self');
 	</script>
 	<?php
   }
 else
   {
     echo "Error !!!!!";
   }
?>
