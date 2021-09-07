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
<div class="container    mt-4 pb-2 overflow-auto">
  <div class="row  ">
    <div class="col-12 mx-auto">
      <img src="cip1.png" class="img-fluid" width="">
     </div>
  </div>
  <div class="row ">
      <div class="col-md-2 mx-auto">
         <h3><a href='testpaper_m1.php' class="ml-5 btn btn-primary text-white">Test paper</a></h3>
       </div>
       <div class="col-md-3 mx-auto">
         <h3><a href='modalpaper_m1.php' class="ml-5 btn btn-primary text-white">Modal paper</a></h3>
       </div>
       <div class="col-md-3 mx-auto">
         <h3><a href='previous_m1.php' class="ml-5 btn btn-primary text-white">Previous year paper</a></h3>
       </div>
       <div class="col-md-2 mx-auto">
         <h3><a href='notes_m1.php' class="ml-5 btn btn-primary text-white">Notes</a></h3>
       </div>
       <div class="col-md-2 mx-auto">
         <h3><a href='syllabus_m1.php' class="ml-5 btn btn-primary text-white">Syllabus</a></h3>
       </div>
        
  </div>
</div>
        <div class="card-header col-md-10 mx-auto">
           <div class=" text-center "><h5 class=" text-center">Syllabus</h5>
        <!-- </div> -->
      </div>
<?php 
if(isset($_POST['submit']))
{

$slct=$_POST['slct'];
}
include 'conection.php';
 $sql="SELECT * FROM `studydb_m1` WHERE slct='Syllabus'";
  $run=mysqli_query($conn,$sql) or die('Error');
   if(mysqli_num_rows($run)>0)
      {
       
       $count=0;
       while ($data=mysqli_fetch_assoc($run))
        {
        $count++;
        ?>
        <!-- <p class="text-center"><?php echo $data['slct'];?></p> -->
        <p class="text-center card-text mt-4"><?php echo $data['tl'];?></p>
       <p class="text-center card-body mx-auto"> <img src="question/<?php echo $data['qpr'];?>" class="img-fluid rounded">
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