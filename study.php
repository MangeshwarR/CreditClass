<?php
    include 'conection.php';
  $sql = "SELECT * FROM `class_11`";
  $run = mysqli_query($conn,$sql);
  $data=mysqli_fetch_assoc($run);
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>student login form</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
<link rel="stylesheet" type="text/css" href="userlogin.css">

</head>
<body>
<div class="container">
  <div class="row mt-5 " >
    <div class="col-md-3"></div>
    <div class="col-md-5">
      <div class="card shadow-lg">
        <form class="form-group" action="" method="post" enctype="multipart/form-data">
          <div class=" col bg-primary text-center mt"><h1 class="text-white">Student study matterials</h1>
        </div>
        <div class="card-header">
           
         <div class="form-group">
           <label for="class">Class Name</label>
            <select id="class" class="custom-select" name="slct">
              <option> Select</option>
              <option value="Test paper"> Test paper  </option> 
              <option value="Modal paper"> Modal paper </option>
              <option value="Preious year paper"> Previous year paper</option>
              <option value="Notes">Notes</option>
              <option value="Syllabus"> Syllabus</option>
           </select>
         </div>
 
          <div class="form-group">
              <label for="fathern">Title</label>
               <div class="input-group-prepend">
                 <input type="text" class="form-control" id="fathern" name="ttl" required="required">
              </div>
          </div>
          <div class="form-group">
               <div class="input-group-prepend">
                 <input type="file" class="form-control" id="fathern" name="qpr" required="required">
              </div>
          </div>
    <div class="row justify-content-around" >
      <div class="col-md-4 mb-2 col-6">
      <input type="reset"  class="form-control btn bg-danger" value="Cancle" name="">
  </div>
  <div class="col-md-6 mb-2 col-6">
    <input type="submit"  class="form-control btn bg-primary" value="Next" name="submit">
</div>
</div> 

  </div>
  </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
 <?php 
 if (isset($_POST['submit'])) 
 {
  include 'conection.php';
  $ttl=$_POST['ttl'];
  $slct=$_POST['slct'];
  $qpr = $_FILES['qpr']['name'];
  $tempname = $_FILES['qpr']['tmp_name'];
  move_uploaded_file($tempname,"question/$qpr");
  $sql="INSERT INTO `studydb`(`slct`,`tl`, `qpr`) VALUES ('$slct','$ttl','$qpr')";
  $run=mysqli_query($conn,$sql) or die('Error');
     ?>
         <script type="text/javascript">
        alert('Successfully data uploaded.'); 
        window.open('study1.php','_self');
      </script>
         <?php
      }
 ?>