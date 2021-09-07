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
          <div class=" col bg-primary text-center mt"><h1 class="text-white">News</h1>
        </div>
        <div class="card-header">
            <div class="form-group">
              <label for="fathern">Title</label>
               <div class="input-group-prepend">
                 <input type="text" class="form-control" id="fathern" name="ttl" required="required">
              </div>
          </div>
           <div class="form-group">
              <label for="fathern">Description</label>
               <div class="input-group-prepend">
                 <textarea class="form-control" id="fathern" name="desc" required="required" cols="12" rows="8"></textarea> 
              </div>
          </div>
          <div class="form-group">
               <div class="input-group-prepend">
                 <input type="file" class="form-control" id="fathern" name="img" required="required">
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
  $desc=$_POST['desc'];
  $image = $_FILES['img']['name'];
  $tempname = $_FILES['img']['tmp_name'];
  move_uploaded_file($tempname,"news/$image");
  $sql="INSERT INTO `news`(`tl`,`des`, `img`) VALUES ('$ttl','$desc','$image')";
  $run=mysqli_query($conn,$sql) or die('Error');
     ?>
         <script type="text/javascript">
        alert('Successfully data uploaded.');
        window.open('notic1.php','_self');
      </script>
         <?php
      }
 ?>