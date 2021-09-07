<?php
// session_start();
  include 'conection.php';

function showdata()
  {
     global $conn;

      $query = "SELECT * FROM `fees_11`";

      $run = mysqli_query($conn,$query);

      if($run == TRUE)
       {
           ?>
          
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Credit fees Detail of Class</title>
	 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->

</head>
<body>
		<div class="container">
	<div class="row mt-5 mb-5">
		<div class="col shadow-lg">
			 <div class="row mb-3">
			 	<div class=" col bg-danger text-center"><h1 class="text-white"> Credit Institute 11 <sup>th</sup> Class Student Detail</h1>
			 	<a href="feepayform.php" class="btṇ bg-primary text-white ml-7 p-3 rounded-circle">Add New Student Fees</a>
			 </div>
			 </div>
						<table class="table table-striped table-hover table-light overflow-auto">
							

			<thead class="thead-light">
				<tr class="">
					<th class="sticky-top">Roll No</th><th class="sticky-top">Name</th><th class="sticky-top">Month</th><th class="sticky-top">Date</th><th class="sticky-top"> Paid</th><th class="sticky-top">Discount</th><th class="sticky-top">Unpaid</th><th class="sticky-top">E-Charge</th><th class="sticky-top">All-Fees</th>
				</tr> </thead>	 
         <?php
          while($data = mysqli_fetch_assoc($run))
          {

           ?>

 	<tr>
 		<td><?php echo $data['roll'];?></td>
 		<td><?php echo $data['name'];?></td>
 		<td><?php echo $data['month'];?></td>
 		<td><?php echo $data['dt'];?></td>
 		<td><?php echo $data['paid'];?></td> 
 		<td><?php echo $data['dcount'];?></td>
 		<td><?php echo $data['unpaid'];?></td>
 		<td><?php echo $data['echarge'];?></td>
 	    <td>2020<a href="feepayformedit.php?roll=<?php echo $data['roll'];?>" class="btṇ bg-primary text-white ml-4 p-1 rounded-circle">Edit</a></td>
 	</tr>
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
        		</div>
		</div>
	</div>
</body>
</html>

<?php
?>