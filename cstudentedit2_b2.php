<?php
$reg =  $_POST['reg'];
$cname =  $_POST['cname'];
$fname =  $_POST['fname'];
$mname =  $_POST['mname'];
include 'conection.php';
$query ="UPDATE `class_b2` SET `reg`='$reg',`cname`='$cname',`fname`='$fname',`mname`='$mname' WHERE `cname`='$cname'";
$run = mysqli_query($conn,$query);
if($run == TRUE)
 {
 	?>
 	<script type="text/javascript">
 		alert('Roll No Uploaded Successfully.');
 		window.open('cstudent_b2.php?reg=<?php echo $reg; ?>','_self');
 	</script>
 	<?php
   }
 else
   {
      echo "Error !!!!!";
   }
?>


