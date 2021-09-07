 
<!DOCTYPE html>
<html lang="en">
<head>
  <title> CREDIT Test form</title>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->

</head>
<body>
<div class="container">
  <div class="row mt-3">
    <!-- <div class="col-md-2"></div> -->
    <div class="col-md-10">
      <div class="card shadow-lg">
        <div class=" col bg-primary text-center"><h1 class="text-white"> Credit Institute B.Com 3 <sup>rd</sup> Class Student Test Details</h1>
        </div>
        <form action="" method="post"> 
         <div class="card-header">
        <div class="input-group">
          <div class="input-group-prepend"><span class="input-group-text">Roll no</span></div>
          <input type="number" class="form-control" id="id1" name="roll" placeholder="Roll no">
        </div>
        <div class="input-group">
          <div class="input-group-prepend"><span class="input-group-text">Name</span></div>
          <input type="text" class="form-control" id="id1" name="name" placeholder="Enter name">
        </div>
        <div class="row justify-content-around" >
          <div class="col-md-4 mb-2 col-6 mt-3">
            <input type="submit"  class="form-control btn bg-primary" name="submit" value="Show Test"> 
          </div>
        </div>
      </div>
    </form>
   
        <div class="card-body mx-auto">
          <p class="card-text">

           <?php
          if(isset($_POST['submit']) && isset($_POST['roll']))
          {
            $roll =  $_POST['roll'];
            $name =  $_POST['name'];
           include 'conection.php';
           $sql = "SELECT * FROM `test_b3` WHERE  `roll`='$roll' AND `name`='$name'";
           $run = mysqli_query($conn,$sql);


           if(mysqli_num_rows($run)>0)
            {
              $data=mysqli_fetch_assoc($run);
             ?>
            <p align="center"> Roll No : &nbsp;  <?php echo $data['roll'];?></p><br>
                    <p align="center"> Student Name : &nbsp;<?php echo $data['name'];?></p><br>
                     <table border="1px" align="center">
                      <tr  style="text-align: center;">
                        <th class="sticky-top">Roll No</th><th class="sticky-top">Name</th><th class="sticky-top">Date</th><th class="sticky-top">Attend</th><th class="sticky-top">Subject</th><th class="sticky-top">Obtain Mark</th><th class="sticky-top">Total Mark</th><th class="sticky-top">Result</th>
                      </tr> 
                    <?php
                $count=0;
                while ($data=mysqli_fetch_assoc($run)) 
                {
                  $count++;
                  ?>
                <tr style="text-align: center;">
                   <td><?php echo $data['roll'];?></td>
                   <td><?php echo $data['name'];?></td>
                   <td><?php echo $data['dt'];?> </td>
                    <td> <?php echo $data['attend'];?></td>
                    <td><?php echo $data['subj'];?></td> 
                    <td><?php echo $data['obmark'];?></td> 
                    <td><?php echo $data['tomark'];?></td>
                    <td><?php echo $data['result'];?></td> 
                </tr>
                <?php
                                 }
                              ?>
              </table>
                     <?php
                     }
                     else
                      {
                           ?>
                  <table align="center" style="margin-top: 200px; font-size: 30px;" >
                   <tr>
                    <th>
                     <?php echo "Record not found.";?>
                    </th>
                   </tr>
                  </table>
                <?php
                      }
                 ?>
        
          </p>
         </div>
         
           <?php 
            }
            ?>
      </div>

    </div>
    <div class="col-md-3"></div>
  </div>
</div>  



  <script type="text/javascript" src="js/jquery.js"></script>
  <!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>

</body>
