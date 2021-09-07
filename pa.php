
<?php
  include "conection.php";
  session_start();

  if(isset($_SESSION["uname"]) && isset($_SESSION["upass"]))
  {
     session_destroy();
     echo "<script>location.href='p.php'</script>";
  }
  else
  {
  	echo "<script>location.href='p.php'</script>";
  }
?>