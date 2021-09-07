<?php
     include 'conection.php';
  // $sql = "SELECT * FROM `addmision`";
  // $run = mysqli_query($conn,$sql);
  // $data=mysqli_fetch_assoc($run);
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
          <div class=" col bg-primary text-center mt"><h1 class="text-white">Student Login</h1>
        </div>
        <div class="card-header">
           
          <div class="form-group">
              <label for="fathern">Student Name</label>
               <div class="input-group-prepend">
                 <input type="text" class="form-control" id="fathern" name="name" placeholder ="Enter Name">
              </div>
          </div>
          <div class="form-group">
              <label for="fathern">Password</label>
               <div class="input-group-prepend">
                 <input type="password" class="form-control" id="fathern" name="pass" placeholder =" Enter Password">
              </div>
          </div>
      <div class="col-md-4 mb-2 col-5 mx-auto"> 
      <input type="submit"  class="form-control btn bg-primary" value="Next" name="submit">
    </div>
    <div class="row justify-content-around" >
      <div class="col-md-4 mb-2 col-6">
      <input type="reset"  class="form-control btn bg-danger" value="Cancle" name="">
  </div>
  <!-- <div class="col-md-6 mb-2 col-6"> -->
    <!-- <a href="pass.php?email=<?php echo $data['email'];?>"><input type="button"  class="form-control btn bg-success" value="Forget Password"></a> -->
<!-- </div> -->
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
  if(isset($_POST['submit']))
  {
    include "conection.php";
    if(empty($_POST['name']))
    {
      echo "<div class='alert alert-danger'>All Fields must be entered.</div>";
      die();
    }
    else
    {
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $pass = mysqli_real_escape_string($conn, $_POST['pass']);
      // $password = ($_POST['password']);

$sql = "SELECT * FROM addmision WHERE cname='$name' AND pass='$pass'  ";

      $run = mysqli_query($conn, $sql) or die("Query Failed.");

      if(mysqli_num_rows($run) > 0)
      {

        while($data = mysqli_fetch_assoc($run))
        {
          session_start();
          
          $_SESSION["uname"] = $data['cname'];
          $_SESSION["upass"] = $data['pass'];
           

          header("Location: {$hostname}pp.php");
        }

      }
      else
      {
      echo '<div class="alert alert-danger">Registration no and Password are not matched. Try another way to reprint the form. </div>';
    }
  }
  }
?>


 