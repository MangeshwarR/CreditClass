<!DOCTYPE html>
<html lang="en">
<head>
	<title> Credit Class Page</title>
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
			 	<div class=" col bg-primary text-center"><h1 class="text-white"> Credit Institute 11 <sup>th</sup> Class Student Detail</h1></div>
			 </div>
			  <div class="card-header">
			  	<div class="row mt-2 mb-2">
			  			<div class="col-md-3 mt-2">
			  				 <a href="cstudent.php" class="btn btn-primary">Student Details</a>
			  			</div>
			  			<div class="col-md-3 mt-2">
			  				 <a href="attend.php" class="btn btn-primary">Attendence Details</a>
			  			</div>
			  			<div class="col-md-3 mt-2">
			  				 <a href="classfee.php" class="btn btn-primary">Fees Details</a>
			  			</div>
			  			<div class="col-md-3 mt-2">
			  				 <a href="classtest.php" class="btn btn-primary">Test Details</a>
			  			</div>

			  	</div>

						
			
				<?php
				include 'conection.php';
				$sql="SELECT * FROM `class_11`,`fees_11`,`test_11`";
				$run= mysqli_query($conn,$sql);
				if ($run==true)
				 {

				   ?>
				   <table class="table table-striped table-hover table-light overflow-auto">
				   <thead class="thead-light">
				<tr class="">
					<th class="sticky-top">Roll No</th><th class="sticky-top">Name</th><th class="sticky-top"> Fees Detail</th>  
				</tr> </thead>
				<?php
       			$count=0;
				while($data=mysqli_fetch_assoc($run))
				{
					$count++;
					?>
				<tr> <td><?php echo $data['reg'] ;?></td>
					<td><?php echo $data['cname'] ;?></td>
					<td><?php echo $data['paid'] ;?>/<?php echo $data['unpaid'] ;?> 
					</tr> 
				<?php 
			}
				 ?>
				
							</table>
							<?php 
			}
				 ?>
						</div>
		</div>
	</div>
</div>


				
				 <script type="text/javascript" src="js/jquery.js"></script>
	<!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>

</body>
</html>