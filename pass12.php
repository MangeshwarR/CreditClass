  
 <?php  
  include 'conection.php';
  $sql = "SELECT * FROM `class_12`";
  $run = mysqli_query($conn,$sql);
  $data=mysqli_fetch_assoc($run);
  ?>

<!DOCTYPE html>
<html>
<head>
<title>Store Student data</title>
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
          <div class=" col bg-primary text-center mt"><h1 class="text-white">Change Password</h1>
        </div>
        <div class="card-header">
           
          <div class="form-group">
              <label for="fathern">Email Id</label>
               <div class="input-group-prepend">
                 <input type="text" class="form-control" id="fathern" name="email" placeholder =" Enter Email" required="required">
              </div>
          </div>

      <div class="col-md-4 mb-2 col-5 mx-auto">
      <input type="submit"  class="form-control btn bg-primary" value="Next" name="submit"></a>
  </div>
      <?php 
    if(isset($_POST['submit']))
    {
       $email =  $_POST['email'];
     include 'conection.php';
     $sql = "SELECT * FROM `class_12` WHERE email='$email'";
     $run = mysqli_query($conn,$sql);

     if(mysqli_num_rows($run)>0)
      {
       $data=mysqli_fetch_assoc($run);
       ?>
       <script>
         window.open('pass1_12.php?id=<?php echo $data["reg"];?>','_self');
       </script>
      <?php
    }
    else
    {
       
        echo '<div class="alert alert-danger text-center">Wrong email id, please check email id retry again.</div>';
        die();
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
 