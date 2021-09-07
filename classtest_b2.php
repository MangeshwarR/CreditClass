
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Class Test result</title>
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
			 	<div class=" col bg-danger text-center"><h1 class="text-white"> Credit Institute B.Com 2 <sup>nd</sup> Class Student Test Detail</h1>
			 		<a href="test_b2.php" class="btṇ bg-primary text-white ml-4 p-3 rounded-circle">Add Student Result </a></div>
			 </div>
			 <?php
           
           include 'conection.php';
           $sql = "SELECT * FROM `test_b2`";
           $run = mysqli_query($conn,$sql);
           if($run==true)
            {
               
             ?>
						<table class="table table-striped table-hover table-light overflow-auto">
							

			<thead class="thead-light">
				<tr>
					<th class="sticky-top">Roll No</th><th class="sticky-top">Name</th><th class="sticky-top">Date</th><th class="sticky-top">Attend</th><th class="sticky-top">Subject</th><th class="sticky-top">Obtain Mark</th><th class="sticky-top">Total Mark</th><th class="sticky-top">Result</th>
				</tr> 
			</thead>
			 <?php
                $count=0;
                while ($data=mysqli_fetch_assoc($run)) 
                {
                  $count++;
                  ?>
                <tr>
                  <td><?php echo $data['roll'];?></td><td><?php echo $data['name'];?></td><td><?php echo $data['dt'];?><a href="#" class="btṇ bg-primary text-white ml-4 p-1 rounded-circle">Edit</a></td> <td> <?php echo $data['attend'];?></td><td><?php echo $data['subj'];?></td> <td><?php echo $data['obmark'];?></td> <td><?php echo $data['tomark'];?></td>
					<td><?php echo $data['result'];?></td> 
				</tr>
				<?php 
						}
				 ?>
	</table>
	                <?php 
						}
						else {
							 echo "Error !!!!";
						}
				 ?>
		</div>
	</div>
</div>
 <script type="text/javascript" src="js/jquery.js"></script>
	<!-- <script type="text/javascript" src="js/popper.js"></script> -->
<script type="text/javascript" src="js/bootstrap.js" ></script>

</body>
</html>