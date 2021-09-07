<!DOCTYPE html>
<html lang="en">
<head>
  <title> CREDIT Admin Login Page</title>
   
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
<link rel="stylesheet" href="css\all.css">
</head>
<body>
<div class="container">
  <div class="row mt-3">
    <div class="col-md-3"></div>
    <div class="col-md-5">
      <div class="card shadow-lg">
        
         <div class="card-header">
          <div class="media">
        <img src="ci.png" width="40px" height="40px">
        <div class="media-body"><h4>CREDIT INSTITUTE</h4>
        <div class=""><small>Student Login</small></div>
        </div>
        </div>
      </div>
        <div class="card-body ">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="form-group mt-4">
         
           <div class="form-group">
             <label for="un"><i class="fas fa-user-tie"></i>&nbsp;&nbsp;Username</label>
      <input type="text" required class="form-control " id="un" name="name" placeholder="Enter username">
    </div>
      
       <div class="form-group">
        <label for="pass"><i class="fas fa-lock"></i>&nbsp;&nbsp;Password</label>
        <input type="Password" required class="form-control " id="pass" name="pass" placeholder="Enter password">
       </div>  
       <div class="row">
         <div class="col-md-9">
           <div class="form-group">
            <label for="captcha"><i class="fas fa-lock"></i>&nbsp;&nbsp;Enter Captcha Code</label>
           <input type="text" required class="form-control " id="captcha" name="captcha" placeholder="Enter captcha code">
       </div>  
         </div>
         <div class="col-md-2">
           <img src="captcha.php" alt="" class="mr-5" style="margin-top: 37px; ">
         </div>
       </div>
     </div>

          
    <div class="row justify-content-around" >
      <div class="col-md-4 mb-2 ">
     
      <input type="submit"  class="form-control btn bg-primary" value="Next" name="login">
    </div>
  <div class="col-md-6 mb-2 mr-2">
    
    <a href="pass.php"><input type="button"  class="form-control btn bg-success" value="Forget Password"></a>
</div>
</div> 
<div class="col-md-12 m-1  mx-auto">
<?php
    if(isset($_POST['login']))
    {
      session_start();
      include "conection.php";
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $captcha = $_POST['captcha'];
        if (!empty($name) && !empty($pass)) 
        {
         if ($_SESSION['CODE'] == $captcha) 
          {
            $sql = "SELECT * FROM class_11 WHERE cname = '$name' AND pass= '$pass'";
            $run = mysqli_query($conn, $sql) or die("Query Failed.");
            if(mysqli_num_rows($run) > 0)
             {
              $data=mysqli_fetch_assoc($run);
             ?>
              <script>
                 window.open('studentlogin.php?id=<?php echo $data["reg"];?>','_self');
               </script>
              <?php    
            }
             else
            {
              echo '<div class="alert alert-danger text-center">Username and Password are not matched,please fill correct username and password.</div>';
            }
          }
             else 
              {
               echo '<div class="alert alert-danger text-center">Please enter valide captcha code.</div>';
              }
            }
       
    }
  ?>
</div>
</form>
      </div>

    </div>
    <div class="col-md-3"></div>
  </div>
</div>  
  
    <script type="text/javascript" src="js/jquery.js"></script>
  
<script type="text/javascript" src="js/bootstrap.js" ></script>
</body>
</html>