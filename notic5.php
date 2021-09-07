<?php
    
   $id1 = $_GET['id1'];
  include 'conection.php';
  $sql = "SELECT * FROM `news1` WHERE `id1`='$id1'";
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
    <!-- <div class="col-md-3"></div> -->
    <div class="col-md-12">
      <div class="card shadow-lg">
        <form class="form-group" action="" method="post" enctype="multipart/form-data" class="text-inline">
          <div class=" col bg-primary text-center mt"><h1 class="text-white text-center">News</h1>
        </div>
       <div class="card-header col-md-10 mx-auto mt-3"> 
        <p class="text-center card-text mt-3"><h1><?php echo $data['tl1'];?></h1></p>
        <p class="text-center card-text mt-3"><?php echo $data['des1'];?> </p>
       </div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>