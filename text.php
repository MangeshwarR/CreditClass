
<!DOCTYPE html>
<html>
<head>
	<title></title>
		 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-8">
			<div class="card shadow-lg">

	<form action="" method="post" align="center" class="text-inline">
		<input type="textarea" name="name" class="mt-5"><br>
		<input type="submit" name="submit" class="mt-3" value="submit">
	
	<div class="card-body mx-auto">
          <p class="card-text">
          	<?php 
if (isset($_POST['submit'])) 
{
$name= $_POST['name'];
include 'conection.php';
$sql="INSERT INTO `text`(`name`) VALUES ('$name')";
// $sql="SELECT * FROM `text`";
 $run=mysqli_query($conn,$sql);
if ($run==true) 
{
 $sql="SELECT * FROM `text`";
 $run=mysqli_query($conn,$sql);
 if (mysqli_num_rows($run)>0) 
 {
 	
 	 $data=mysqli_fetch_assoc($run);
 	 $count=0;
 	 while ($data=mysqli_fetch_assoc($run)) 
 	 {
 	 	 $count++;
 	 ?>

 	 <p><?php echo $data['name'];?></p>
 	 <?php
 	}
 } 
}
 else
  {
 	 echo "error";
 }
 
}
 ?>
 </form>
</p>
</div>
</div>
</div>
</div>
</div>

</body>
</html>

