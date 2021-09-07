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
		<div class="col-md-12">
			<div class="card shadow-lg"> 
<div class="card-body mx-auto ">
  <form action="" method="post">
    <div> <input type=" number" name="roll" placeholder="Enter roll no"><input type="submit" name="submit" value="View"></div>
  </form>
  <?php
  if (isset($_POST['submit'])) {
    $roll =$_POST['roll'];
  
  include 'conection.php';
    $query = "SELECT * FROM `class_b3` WHERE `reg`='$roll'";
      $run = mysqli_query($conn,$query);
      if(mysqli_num_rows($run)>0)
       {
        $data=mysqli_fetch_assoc($run);
           ?>
           <table align="center">
 <tr>
<td><b><i>Roll no</i></b></td>  <td><i><?php echo $data['reg'];?></i></td>
</tr>
<tr>
<td><b><i>  Name</i></b></td><td><i><?php echo $data['cname'];?></i></td>
</tr>
<tr>
 <td><b><i> Father's name</i></b></td><td><i><?php echo $data['fname'];?></i></td></tr>
 <tr>
 <td><b><i> Mother's name</i></b></td><td><i><?php echo $data['mname'];?></i></td>
</tr> 
   </table>
   <?php
 }
}
 ?>
 <?php
function showdata()
  {
include 'conection.php';
 $sql = "SELECT * FROM `attend_b3`";
 $run = mysqli_query($conn,$sql);
  if($run==true)
  {
     
   ?>
   <div class="container">
  <div class="row mt-3">
    <div class="col-md-12">
      <div class="card shadow-lg"> 
<div class="card-body mx-auto ">
  <table align="center">
 <tr>
	<td style="text-align: center;">Date</td><td>  </td><td style="text-align: center;">Attend</td>
</tr>
 <?php
          while($data = mysqli_fetch_assoc($run))
          {

           ?>
   	<tr>
   		<td style="text-align: center;"><?php echo $data['dt'];?></td> 
      <td>  </td>
      <td style="text-align: center;"><?php echo $data['1'];?></td>  
</tr>
<?php 
}
 ?>
</table>
</div>
</div>
</div>
</div>
</div>
<?php
  }
  else
  {
    echo "No Record Found";
    
  }
}

?> 
<script type="text/javascript" src="js/jquery.js"></script>
<!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>
<?php
          showdata();
        ?>
</body>
</html>