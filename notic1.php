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
        <div class="row">

<?php 
include 'conection.php';
 $sql="SELECT * FROM `news`";
  $run=mysqli_query($conn,$sql) or die('Error');
   if(mysqli_num_rows($run)>0)
      {
       
       $count=0;
       while ($data=mysqli_fetch_assoc($run))
        {
        $count++;
        ?>
          <div class="col-md-5 ml-5">
              <div class="card shadow-lg mt-2">
                <div class="card-header p-1">
             <p class="text-center card-text mt-3"><h1><b><?php echo $data['tl'];?></b></h1></p>
              </div>
             <p class="text-center card-body mx-auto"> <img src="news/<?php echo $data['img'];?>" height="200px" width="300px" class="img-fluid rounded">
            </p>
             <p class="text-center card-text mt-3"><?php echo substr($data['des'],0,30); ?> <a href="notic2.php?id=<?php echo $data['id'];?>" class="btn btn-primary nave-link ml-3">Read more</a></p>
           </div>
         </div> 
       <?php
   }

}
  
 ?>
 <?php 
include 'conection.php';
 $sql="SELECT * FROM `news1`";
  $run=mysqli_query($conn,$sql) or die('Error');
   if(mysqli_num_rows($run)>0)
      {
       
       $count=0;
       while ($data=mysqli_fetch_assoc($run))
        {
        $count++;
        ?>
        <div class="col-md-5 ml-5">
              <div class="card shadow-lg mt-3">
                <div class="card-header p-0">
             <p class="text-center card-text mt-3"><h1><b><?php echo $data['tl1'];?></b></h1></p>
              </div>
             <p class="text-center card-text mt-4"><?php echo substr($data['des1'],0,30); ?> <a href="notic4.php?id1=<?php echo $data['id1'];?>" class="btn btn-primary nave-link ml-3">Read more</a></p>
           </div>
         </div> 
         <?php
   }
   
}
  
 ?>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>