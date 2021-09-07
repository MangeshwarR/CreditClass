<?php
  include 'conection.php';

function showdata()
  {
     global $conn;

      $query = "SELECT * FROM `class_12`";

      $run = mysqli_query($conn,$query);

      if($run == TRUE)
       {
           ?>
           <!DOCTYPE html>
<html lang="en">
<head>
	<title>Credit Attedence Detail of class      </title>
	 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->
<style type="text/css">
	table tr td a 
	{
		text-decoration: none;
	}
</style>
</head>
<body>
		<div class="container">
	<div class="row mt-5 mb-5">
		<div class="col shadow-lg">
			 <div class="row mb-3">
			 	<div class=" col bg-danger text-center"><h1 class="text-white"> Credit Institute 12 <sup>th</sup> Class Student Attend Detail</h1> </a>
			 	</div>
			 </div>
			 <div class="row ">
			<div class="col-md-4 mx-auto">
			   <h3><a href='attend1_12.php' class="ml-5 btn btn-primary text-white">View All Student Attend Details</a></h3>
			 </div>
			 <div class="col-md-4 mx-auto">
			 	<h3><a href='classattend12.php' class="ml-5 btn btn-primary text-white">Add Student Attendence</a></h3>
			 	 </div>
			 	</div>
			 	 
						<table class=" overflow-auto table table-striped table-hover table-light table-bordered shadow" >
							

			<thead class="thead-light">
				<tr class=" overflow-auto">
                     <th colspan="5" style="text-align: center;"><h2><?php echo date('M'); ?>&nbsp;&nbsp;&nbsp;<?php echo date('Y'); ?></h2></th>
                 </tr>
                 <tr class=" overflow-auto">
					<th class="sticky-top">Roll No</th>
					<th colspan="2" class="sticky-top">Name</th>
					<th class="sticky-top">Father's Name</th>
					<th class="sticky-top">Mother's Name</th>					
				</tr> </thead>	 
         <?php
          while($data = mysqli_fetch_assoc($run))
          {

           ?>

 	<tr>
<td colspan="2"><?php echo $data['reg'];?></td>	 
<td><?php echo $data['cname'];?></td>
 <td><?php echo $data['fname'];?></td>
 <td><?php echo $data['mname'];?></th>
<?php
}
?>
</table>
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
          // echo "<a href='index.php'>Back</a>";
        ?>
</body>
</html>
<?php
?>
