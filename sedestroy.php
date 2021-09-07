
<?php
  include "conection.php";
  session_start();

  if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/adminloginform.php");
  }
?>