
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Credit Class TestForm</title>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="navbar.css">

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8">
      <div class="card shadow-lg">
        <form class="form-group" action="" method="post" enctype="multipart/form-data">
          <div class=" col bg-primary text-center"><h1 class="text-white"> Credit Institute B.Com 2 <sup>nd</sup> Class Student Attendence Details</h1>
        </div>
        <div class="card-header">
           
          <div class="form-group">
      <label for="fathern">Roll No</label>
      <div class="input-group-prepend">
        <input type="number" class="form-control" id="fathern" name="roll" value="<?php echo date('20201'); ?>">
      </div>
      </div>
      <div class="form-group">
      <label for="fathern">Month</label>
      <div class="input-group-prepend">
        <input type="text" class="form-control" id="fathern" name="month" value="<?php echo date('M'); ?>">
      </div>
      </div>
      
    <div class="form-group">
      <label for="fathern">Date</label>
      <div class="input-group-prepend">
        <input type="text" value="<?php echo date('d/m/Y');?>" class="form-control" id="fathern" name="dt" value="<?php ?>">
      </div>
      </div>
      <div class="form-group">
      <label for="fathern">Attend</label>
      <div class="input-group-prepend col-md-3">
        <p>P</p><input type="radio" class="form-control" id="fathern" name="attend" value="P"><p>A</p><input type="radio" class="form-control" id="fathern" name="attend" value="A">
      </div>
      </div>
      
      <div class="col-md-4 mb-2 col-5">
      <input type="submit"  class="form-control btn bg-primary" value="Submit" name="submit">
  </div>
    </div>
    </form>
     
  <?php
if (isset($_POST['submit']))
 {
  

$roll=$_POST['roll'];
$month=$_POST['month'];
$dt=$_POST['dt'];
$attend=$_POST['attend'];
include 'conection.php';
$query ="INSERT INTO `attend_m2`(`roll`, `month`, `dt`, `attend`) VALUES ('$roll','$month','$dt','$attend')";
$run = mysqli_query($conn,$query);
if($run == TRUE)
 {
   
      
   }
 else
   {
     echo "Error !!!!!";

   }
}



?>

 </div>
      </div>

    </div>
     
  </div>
</div>  



  <script type="text/javascript" src="js/jquery.js"></script>
  <!-- <!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>

</body> 
 
<html> 