 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Details</title>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="navbar.css">

</head>
<body>
<div class="container">
  <div class="row mt-3">
    <div class="col-md-12"></div>
    <div class="col-md-12">
      <div class="card shadow-lg">
        <form action="" method="post"> 
        <div class=" col bg-danger text-center"><h1 class="text-white"> Credit Institute B.Com 1 <sup>st</sup> Class Student Detail</h1>
         
       </div>
        
         <div class="card-header">
        <div class="input-group">
          <div class="input-group-prepend"></div>
          <input type="number" class="form-control" id="id1" name="reg" placeholder="Enter Registration No">

          <div class="input-group-append"> <input type="submit" name="submit" class="btn btn-warning" value="View Student Details"> </div>
        </div>
      </div>
</form>
 
<div class="card-body mx-auto ">
<p class="card-text">    
 <?php
 // error_reporting(0);
if(isset($_POST['submit']))
{
  $reg =  $_POST['reg'];

include 'conection.php';
 $sql = "SELECT * FROM `addmision` WHERE  reg='$reg'";
 $run = mysqli_query($conn,$sql);
 if(mysqli_num_rows($run)>0)
 {
        while($data = mysqli_fetch_assoc($run))
        {
          session_start();
          $_SESSION["userreg"] = $data['reg'];
          $_SESSION["useradhar"] = $data['adhar'];        
   ?>
<table align="center">
<tr>
  <th  colspan="3">
       <h1><big>Cr.</big> Credit Commerce Classes</h1><hr/>
   </th>
</tr>
   <tr>
    <th colspan="3">
    <h3>ADMISSION FORM</h3><br/>
  </th>
</tr>
<tr>
  <td>Registration No:</td><td><?php echo $data['reg'];?></td>
   <td rowspan="5"><img  height="150px" width="170px" src="images/<?php echo $data['img'];?>"></td>
</tr>
<tr>
  <td>Candidate's Name:</td><td><?php echo $data['cname'];?></td>
</tr>
<tr>
  <td>Father's Name:</td><td><?php echo $data['fname'];?></td>
</tr>
<tr>
   <td>Mother's Name:</th><td><?php echo $data['mname'];?></th>
</tr>
<tr>
   <td>Gender:</th><td><?php echo $data['gender'];?></th>
</tr>
<tr>
  <td>Mobile No:</th><td> <?php echo $data['mob'];?></td>
  <td rowspan="2"><img  height="50px" width="170px" src="signature/<?php echo $data['sign'];?>"></td>


</tr>
<tr>
  <td>Adhar No:</th><td colspan="2"> <?php echo $data['adhar'];?></td>
  
</tr>

<tr>
  <td>G-mail:</th><td> <?php echo $data['email'];?></td>
</tr>
<tr>
  <td>Date of Birth:</td><td colspan="2"> <?php echo $data['dob'];?></td>
</tr>
  <td colspan="3">Address:------</td> 
</tr>

<tr>
  <td>Village</td><td colspan="2"> <?php echo $data['vill'];?></td>
</tr>
  <td>Block</td><td colspan="2"> <?php echo $data['block'];?></td>
</tr>
  <td>District</td><td colspan="2"> <?php echo $data['dist'];?></td>
</tr>
<tr>
  <td colspan="3">Aadhaar Image -------</td>
<tr>
  <tr>
    <td colspan="3"><img  height="150px" width="340px" src="adhar/<?php echo $data['afimg'];?>">
    <img  height="150px" width="340px" src="adhar/<?php echo $data['abimg'];?>"></td>
  </tr>
  <th colspan="3"><h3>Previous Year Education Detail</h3><hr/></th> 
</tr>
<tr>
  <td>Class</td><td colspan="2"> <?php echo $data['class'];?></td>
</tr>
<tr>
  <td>Trade</td><td colspan="2"> <?php echo $data['trade'];?></td>
</tr>
<tr>
  <td>Passing Year</td><td colspan="2"> <?php echo $data['pec'];?></td>
</tr>
<tr>
  <td colspan="3">Result:------</td> 
</tr>
<tr>
  <td>Obtain Mark</td><td colspan="2"> <?php echo $data['obmark'];?></td>
</tr>
<tr>
  <td>Total Mark</td><td colspan="2"> <?php echo $data['tomark'];?></td>
</tr>
<tr>
  <th colspan="3"><h3>Current Year Education Detail</h3><hr/></th> 
</tr>
<tr>
  <td>School/College Name</td><td colspan="2"> <?php echo $data['collname'];?></td>
</tr>
<tr>
  <td>Class</td><td colspan="2"> <?php echo $data['cclass'];?></td>
</tr>
<tr>
  <td>Trade</td><td colspan="2"> <?php echo $data['ctrade'];?></td>
</tr>
<tr>
  <td>Learn Subjects</td><td colspan="2"> <?php echo $data['lsub'];?></td>
</tr>
<tr>
  <td>Board</td><td colspan="2"> <?php echo $data['board'];?></td>
</tr>
<tr>
  <th colspan="3">
    I <?php echo $data['cname'];?> s/o <?php echo $data['fname'];?> declare that all the information given by me best of my knowledge.</th>
 </tr>
 <tr>
  <th colspan="3"> Parent's Signature:   ______________________________</th>
 </tr>
 
<tr>
  <th colspan="3"> Authorized Signature:   ______________________________</th>
</tr>
</table>
<?php
 
}
  }
  else
  {
      echo '<div class="alert alert-danger">Registration no and Password are not matched. Try another way to reprint the form. </div>';
    }
  }
    ?>
    <?php
    if (isset($_POST['submit'])) {
    
include 'conection.php';
       $reg= $_SESSION["userreg"];    
        $adhar=  $_SESSION["useradhar"];
        $sql1 = "SELECT * FROM class_b1 WHERE adhar = $adhar";
        $run1 = mysqli_query($conn, $sql1) or die("Query Failed.1");
        if(mysqli_num_rows($run1) > 0)
        {
          echo '<div class="alert alert-danger">This student record already exist Please check class table & retry again.</div>';
           echo '<div><a href="cstudentedit_b1.php" class="btn btn-primary "> Back</a></div>';
                   
        }
    else
    {
      $sql2 = "INSERT INTO  `class_b1` SELECT * FROM `addmision` WHERE  reg='$reg'";
      $run2 = mysqli_query($conn,$sql2) or die("Query Failed 2.");
      if($run2 == true)
   {
     
    ?>

   <a href="cstudentedit1_b1.php" class="btn btn-primary mx-auto">Add</a>

    <?php
    
   }
 }
  
   
}
?> 

               </p>
              </div>
             </div>
      </div>
     </div>
    <div class="col-md-3"></div>
  </div>
</div>  
<script type="text/javascript" src="js/jquery.js"></script>
<!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>
</body>
</html>