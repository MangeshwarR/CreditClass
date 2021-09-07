  
<?php 
$id = $_GET['id'];
   include 'conection.php';
   
 $sql = "SELECT * FROM `class_b2` WHERE reg='$id'";

 $run = mysqli_query($conn,$sql);

 if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title> navbar</title>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
    
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
              <label for="fathern">New Password</label>
               <div class="input-group-prepend">
                 <input type="password" class="form-control" id="fathern" name="pass" value="<?php echo $data['pass']; ?>" required="required">
              </div>
          </div>
          <div class="form-group">
              <label for="fathern">Confirm Password</label>
               <div class="input-group-prepend">
                 <input type="password" class="form-control" id="fathern" name="pass1" value="<?php echo $data['pass']; ?>" required="required">
              </div>
          </div>

      <div class="col-md-4 mb-2 col-5 mx-auto">
          <input type="hidden" value="<?php echo $data['email'];?>" name="email" >
      <input type="submit"  class="form-control btn bg-primary" value="Next" name="submit">
  </div>
  
</div>
</form>
<div class="col-md-12 m-1  mx-auto">
<?php
}
if (isset($_POST['submit']))
 {
 

$email =  $_POST['email'];
$pass =  $_POST['pass'];
$pass1 =  $_POST['pass1'];
if ($pass == $pass1)
  {
         
      ?>
        <script type="text/javascript">
           window.open('userlogin_b2.php','_self');
            alert('Your Password changed Successfully');
         </script>
      <?php
      include 'conection.php';
    $sql = "UPDATE `class_b2` SET `pass`='$pass', `pass`='$pass1' WHERE `email`='$email'";
     $run = mysqli_query($conn,$sql);
      if($run == true)
       { 
          
        }
   }
   else
  {
    
      echo '<div class="alert alert-danger text-center"> Password are not matched,please enter the same possword.</div>';
   die();
         

    }
  }
      
?>
</div>
</div>
</div>
</div>
</div>
</body>
</html>