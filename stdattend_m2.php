      
<!DOCTYPE html>
<html lang="en">
<head>
  <title> CREDIT Fee pay form</title>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->

</head>
<body>
<div class="container">
  <div class="row justify-content-around" >
  <!-- <div class="row mt-3"> -->
    <!-- <div class="col-md-2"></div> -->
    <div class="col-md-8">
      <div class="card shadow-lg">
        <div class=" col bg-primary text-center"><h1 class="text-white"> Credit Institute M.Com 2 <sup>nd</sup> Class Student Attendence Details</h1>
        </div>
        <form action="" method="post"> 
         <div class="card-header">
          <div class="input-group">
          <div class="input-group-prepend"><span class="input-group-text">Month</span></div>
          <input type="text" class="form-control" id="id1" name="month" value="<?php echo date('M');?>">
        </div> 
        <div class="input-group">
          <div class="input-group-prepend"><span class="input-group-text">Roll no</span></div>
          <input type="number" class="form-control" id="id1" name="roll" value="<?php echo date('20201');?>">
        </div> 
      <div class="row justify-content-around" >
    <div class="col-md-4 mb-2 col-6 mt-3">
      <input type="submit"  class="form-control btn bg-primary" name="submit" value="Show Attendence"> 
    </div>

  </div>
</div>
    </form>
   
        <div class="card-body mx-auto">
          <p class="card-text">

           <?php
           if (isset($_POST['submit'])) 
           {
            $month = $_POST['month'];
            $roll = $_POST['roll'];
           include 'conection.php';
           $sql = "SELECT * FROM `class_m2`,`attend_m2` WHERE reg='$roll' AND roll='$roll' AND month='$month'";
           $run = mysqli_query($conn,$sql);
           
           if($run==true) 
            {
              $data=mysqli_fetch_assoc($run);
              ?>
              <p>Roll no:  &nbsp; <?php echo $data['roll'];?></p>
                <p>Name:  &nbsp; <?php echo $data['cname'];?></p>   
                     <table border="1px" align="center">
                      <tr style="text-align: center;"><th colspan="10"><?php echo $data['month'];?></th></tr>
                      <tr style="text-align: center;">
                        <td>Date</td><td>Attend</td>
                      </tr>
                    <?php
                $count=0;
                while ($data=mysqli_fetch_assoc($run)) 
                {
                  $count++;
                  ?>
                <tr style="text-align: center;">
                   
                  <td><?php echo $data['dt'];?></td> 
                  <td><?php echo $data['attend'];?></td>  
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
                     <?php echo "Not record found.";?>
                    </th>
                   </tr>
                  </table>
                <?php
                      }
                    }
                 ?>
        
          </p>
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