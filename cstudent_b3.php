<?php
// session_start();
  include 'conection.php';

function showdata()
  {
     global $conn;

      $query = "SELECT * FROM `class_b3`";

      $run = mysqli_query($conn,$query);

      if($run == TRUE)
       {
           ?>
           <!DOCTYPE html>
<html lang="en">
<head>
	<title>Credit Student Profile Data</title>
	 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>
<body>
		<div class="container-fluid">
	<div class="row mt-3 mb-5">
			 	<div class=" col bg-danger text-center fixed-top "><h1 class="text-white"> Credit Institute B.Com 3 <sup>rd</sup> Class Student Detail</h1><a href="cstudentedit_b3.php" class="btṇ bg-primary text-white ml-7 p-3 rounded-circle">Add New Student</a></div>
                
			 </div>
                       
						<table class=" overflow-auto table table-striped table-hover table-light table-bordered  shadow" >
							

			<thead class="thead-light">
				<tr class=" overflow-auto">

					<th class="sticky-top">Roll No</th>
					<th colspan="2" class="sticky-top">Name</th>
					<th class="sticky-top">Father's Name</th>
					<th class="sticky-top">Mother's Name</th>
					<th class="sticky-top">Gender</th>
					<th class="sticky-top">Mobile no</th>
					<th class="sticky-top">Address</th>
					<th class="sticky-top">DOB</th>
					<th class="sticky-top">Aadhar</th>
					<th class="sticky-top">Aad photo1</th>
					<th class="sticky-top">Aad photo2</th>
					<th class="sticky-top">Email id</th>
					<!-- <th class="sticky-top">E_mail</th> -->
					<th class="sticky-top">Class</th>
					<th class="sticky-top">Trade</th>
					<th class="sticky-top">Subjects</th>
					<th class="sticky-top">Board</th>
					<th class="sticky-top">College/University Name</th>
					<!-- <th class="sticky-top">Result</th> -->
					<th class="sticky-top">Photo</th>
					<th class="sticky-top">Sign</th>
					<th class="sticky-top">Year</th>
					
					
				</tr> </thead>	 
         <?php
          while($data = mysqli_fetch_assoc($run))
          {

           ?>

 	<tr>
		<td colspan="2"><?php echo $data['reg'];?><a href="cstudentedit1_b3.php?cname=<?php echo $data['cname'];?>" class="btṇ bg-primary text-white ml-4 p-1 rounded-circle">Edit</a><a href="cstudentdeleteB3.php?reg=<?php echo $data['reg'];?>" class="btṇ bg-danger text-white ml-4 p-1 rounded-circle">Delete</a> </td>	 
<td><?php echo $data['cname'];?></td>
 <td><?php echo $data['fname'];?></td>
 <td><?php echo $data['mname'];?></th>
 <td><?php echo $data['gender'];?></th>
<td> <?php echo $data['mob'];?></td>
 <td> <?php echo $data['vill'];?>&nbsp;<?php echo $data['block'];?>&nbsp;<?php echo $data['dist'];?></td>
 <td> <?php echo $data['dob'];?></td>	
 <td> <?php echo $data['adhar'];?></td>
 <td><img  height="50px" width="50px" src="adhar/<?php echo $data['afimg'];?>"></td>
 <td><img  height="50px" width="50px" src="adhar/<?php echo $data['abimg'];?>"></td>
<td> <?php echo $data['email'];?></td>
<td><?php echo $data['cclass'];?></td>
<td><?php echo $data['ctrade'];?></td>  
<td><?php echo $data['lsub'];?></td>
<td><?php echo $data['board'];?></td>   
<td><?php echo $data['collname'];?></td>
<td><img  height="50px" width="50px" src="images/<?php echo $data['img'];?>"></td>
<td><img  height="30px" width="50px" src="signature/<?php echo $data['sign'];?>"></td>
<td><?php echo $data['pec'];?></td>
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
</body>
</html>
<?php
?>
 