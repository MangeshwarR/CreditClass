
<?php 
$email =  $_POST['email'];
$pass =  $_POST['pass'];
$pass1 =  $_POST['pass1'];
if ($pass == $pass1)
  {
			   
      ?>
	      <script type="text/javascript">
	      	 window.open('userlogin_b1.php','_self');
	      	  alert('Your Password changed Successfully');
	       </script>
      <?php
      include 'conection.php';
		$sql = "UPDATE `class_b1` SET `pass`='$pass', `pass`='$pass1' WHERE `email`='$email'";
		 $run = mysqli_query($conn,$sql);
		  if($run == true)
		   { 
		      
		    }
	 }
	 else
	{
      ?>
         <script type="text/javascript">
      	   window.open('pass1_b1.php','_self');
      	   alert('Not match password,please enter same password');
         </script>
       <?php

    }
  		
?>