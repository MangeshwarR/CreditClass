 
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
  <div class="row mt-3">
    <!-- <div class="col-md-2"></div> -->
    <div class="col-md-10">
      <div class="card shadow-lg">
        <div class=" col bg-primary text-center"><h1 class="text-white"> Credit Institute 12 <sup>th</sup> Class Student Fees Details</h1>
        </div>
        <form action="" method="post"> 
         <div class="card-header">
        <div class="input-group">
          <label for="">Roll No</label>
          <!-- <div class="input-group-prepend"><span class="input-group-text">Roll no</span></div> -->
          <input type="number" class="form-control" id="id1" name="roll" placeholder="Roll no">
        </div>
        <div class="form-group">
      <label for="fathern">Roll No</label>
      <div class="input-group-prepend">
        <input type="number" class="form-control" id="fathern" name="roll" value="<?php ?>">
      </div>
      </div>

       <div class="form-group">
      <label for="fathern">Name</label>
      <div class="input-group-prepend">
        <input type="text" class="form-control" id="fathern" name="name" value="<?php ?>">
      </div>
      </div>

      <div class="form-group">
      <label for="class">Month</label>
      <select id="month"class="custom-select" name="month">
        <option> Select</option>
              <option value="January"> January</option> 
               <option value="February">February</option> 
                <option value="March"> March</option> 
                 <option value="April"> April</option> 
                  <option value="May"> May</option> 
                   <option value="June">June</option> 
                    <option value="July"> July</option> 
                     <option value="August"> August</option> 
                      <option value="September"> September</option> 
                       <option value="October"> October</option> 
                        <option value="November">November</option> 
                         <option value="December"> December</option> 
               
      </select>
  
</div>



        <div class="input-group">
          <div class="input-group-prepend"><span class="input-group-text">Name</span></div>
          <input type="text" class="form-control" id="id1" name="name" placeholder="Enter name">
        </div>
        <div class="input-group">
          <div class="input-group-append"> <input type="submit" name="submit" value="Show" class="btn btn-primary"> </div>
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
           $conn = mysqli_connect('localhost','root','','ccc');
           $sql = "SELECT * FROM `fees_12` WHERE  `roll`='$roll' AND name='$name'";
           $run = mysqli_query($conn,$sql);


           if(mysqli_num_rows($run)>0)
            {
              $data=mysqli_fetch_assoc($run);
             ?>
            <p align="center"> Roll No : &nbsp;  <?php echo $data['roll'];?></p><br>
                    <p align="center"> Student Name : &nbsp;<?php echo $data['name'];?></p><br>
                     <table border="1px" align="center">
                      <tr style="text-align: center;">

                          <th class="sticky-top">Month</th><th class="sticky-top">Date</th><th class="sticky-top">Paid</th><th class="sticky-top">Unpaid</th><th class="sticky-top">Discount</th><th class="sticky-top">Extracharge</th><th class="sticky-top">Total Fees</th>  
                      </tr>
                    <?php
                $count=0;
                while ($data=mysqli_fetch_assoc($run)) 
                {
                  $count++;
                  ?>
                <tr style="text-align: center;">
                  <td><?php echo $data['month'];?></td>
                  <td><?php echo $data['dt'];?></td> 
                    <td><?php echo $data['paid'];?></td>
                    <td><?php echo $data['dcount'];?></td>
                    <td><?php echo $data['unpaid'];?></td>
                    <td><?php echo $data['echarge'];?></td>
                    <td>2000Rs.</td>
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
                     <?php echo "Your fees are not deposit.";?>
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
