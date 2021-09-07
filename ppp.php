<?php
if(isset($_POST['submit']))
{
  $name =  $_POST['name'];
  $pass =  $_POST['pass'];
   
include 'conection.php';
 $sql = "SELECT * FROM `addmision` WHERE  pass='$pass' AND cname='$name'";
 $run = mysqli_query($conn,$sql);
 if(mysqli_num_rows($run)>0)
  {
        $data=mysqli_fetch_assoc($run);
        while($row = mysqli_fetch_assoc($result))
        {
          session_start();
          $_SESSION["reg"] = $row['reg'];
          $_SESSION["uname"] = $row['cname'];
          $_SESSION["uadhar"] = $row['adhar'];
          $_SESSION["ucclass"] = $row['cclass'];
          header("Location:ppp.php");
        

      }
      // else
      // {
      // echo '<div class="alert alert-danger">Registration no and Password are not matched. Try another way to reprint the form. </div>';
    // }
    
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Credit Class TestForm</title>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->

</head>
<body>



<div class="container    mt-4 pb-2 overflow-auto">
  <div class="row  ">

    <div class="col-12 mx-auto">
      <img src="cip.png" class="img-fluid" width="">
     </div>
  </div>
  <div class="row">
    <div class="col-5 ml-5 "><p>Registration Number - <?php echo $data['reg'];?> </p> </div>
    <div class="col-5 ml-5 "><p>  Date-<?php echo date('D') ;?>&nbsp;&nbsp;<?php echo date('d/M/Y') ;?> </p>  </div>
  </div>
  <div class="row">
    <div class="col-8 ml-5 mb-2">
  <p>     Candidate Name - <?php echo $data['cname'];?><br> </p>
    <p> Father's Name - <?php echo $data['fname'];?><br> </p>
      <p>Mother's Name - <?php echo $data['mname'];?> <br></p>
  
  <p>   Date Of Birth -  <?php echo $data['dob'];?><br></p>
    <p> Adhaar Number - <?php echo $data['adhar'];?><br></p>
  <p>   Mobile Number -  <?php echo $data['mob'];?><br></p>
    <p> E-mail Adress - <?php echo $data['email'];?><br>
</p>
<p> Adress - <?php echo $data['vill'];?>,<?php echo $data['block'];?>,<?php echo $data['dist'];?><br></p>
    </div>
    <div class="col-2 my-0  "> <img src="images/<?php echo $data['img'];?>" class="border mx-auto" height="200px" width="200px"><img src="signature/<?php echo $data['sign'];?>" class=" border mx-auto mt-2" width=" 200px" height="50px">
    </div>
  </div>
  <div class="row mx-auto m-3 text-nowrap border ">
       <div class="col-12 ">
       <h3 class="text-nowrap">Privious Year Education Detail</h3>
       </div>
  </div>
  <div class="row">
    <div class="col-11 pl-5">
  <p>   Class Name -  <?php echo $data['class'];?><br></p>
    <p> Trade/Sector - <?php echo $data['trade'];?><br></p>
    <p> Passing Year - <?php echo $data['pec'];?><br></p>
    <p> Result - <?php echo $data['obmark'];?>/<?php echo $data['tomark'];?><br></p>
    </div>
  </div>
  <div class="row mx-auto m-3 text-nowrap border">
    <div class="col-12 ">
        <h3 class="">Cerrent Year Education Detail</h3>
       </div>
  </div>
  <div class="row">
    <div  class="col-5 ml-5 ">
    <p> Class Name - <?php echo $data['cclass'];?><br></p>
    <p> College Name - <?php echo $data['collname'];?><br></p>
    <p> Board/University Name - <?php echo $data['board'];?><br></p>
    <p> Learn Subject Name - <?php echo $data['lsub'];?><br></p>
   </div>
    <div class="col-2 my-0">
      Aadhaar Image :-
    </div>
      <div class="col-2 my-0">    
      <img src="adhar/<?php echo $data['afimg'];?>" width="350px" height="130px"> <br>
      <img src="adhar/<?php echo $data['abimg'];?>" class="mt-2" width="350px" height="130px">
            
      </div>
          
    </div>

  <div class="row">
    <div class="col p-3 ml-5 mb-2"> I  <b><i>  <?php echo $data['cname'];?></i></b>  promise that I will always present in the class timely & follow all the rule and regulation of the Institute.</div>
  </div>
  <div class="row mb-5 pb-5">
    <div class="col-5 ml-5"><p>Parent sign _________________________________ <br> </p><p> Date _____________ </p></div>
    <div class="col-6"><p> Authorized sign __________________________ <br></p> <p>Date_____________</div></p>
  </div>
</div>

  <script type="text/javascript" src="js/jquery.js"></script>
  <!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>

</body>
</html>
<?php
 } 
 else
 {
  echo "<h2 align='center'>Not record fount,Please correct name and password enter.</h2>";
 }
}
?>