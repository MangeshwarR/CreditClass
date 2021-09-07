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
          <div class=" col bg-primary text-center mt"><h1 class="text-white text-center">Student study matterials</h1>
        </div>
        <div class="card-header">
<?php 
include 'conection.php';
 $sql="SELECT * FROM `studydb_m2`";
  $run=mysqli_query($conn,$sql) or die('Error');
   if(mysqli_num_rows($run)>0)
      {
       
       $count=0;
       while ($data=mysqli_fetch_assoc($run))
        {
        $count++;
        ?>
        <p class="text-center"><?php echo $data['slct'];?></p>
        <p class="text-center"><?php echo $data['tl'];?></p>
       <p class="text-center"> <img src="question/<?php echo $data['qpr'];?>" width="300px" height="130px" class="sm-auto">
       </p>
       <?php
   }
}
  
 ?>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>