<?php
  include 'conection.php';

function showdata()
  {
     global $conn;
      $query = "SELECT * FROM `attend_m1` ";

      $run = mysqli_query($conn,$query);

      if($run == TRUE)
       {
           ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Details</title>
	 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->

</head>
<body>
<div class="container-fluid">
	<div class="row mt-3">
		<div class="col-md-12"></div>
		<div class="col-md-12">
			<div class="card shadow-lg">
				<form action="" method="post"> 
			 	<div class=" col bg-danger text-center"><h1 class="text-white"> Credit Institute 12 <sup>th</sup> Class Student Attend Detail</h1>
			 	 
			 </div>
				
				 <div class="card-header">
				 <table class=" overflow-auto table table-striped table-hover table-light table-bordered  shadow" >
							

			<thead class="thead-light">
				<tr class=" overflow-auto"> 
					<th colspan="32" style="text-align: center;color:#000;"  class="sticky-top"><?php echo date('M-Y');?></th>
                   </tr>
                   <tr>
					<th style="text-align: center;" class="sticky-top">Date</th>
					<th rowspan="2" style="text-align: center;" class="sticky-top">Roll No 1</th><th class="sticky-top">2</th><th class="sticky-top">3</th><th class="sticky-top">4</th><th class="sticky-top">5</th><th class="sticky-top">6</th><th class="sticky-top">7</th><th class="sticky-top">8</th><th class="sticky-top">9</th><th class="sticky-top">10</th><th class="sticky-top">11</th><th class="sticky-top">12</th><th class="sticky-top">13</th><th class="sticky-top">14</th><th class="sticky-top">15</th><th class="sticky-top">16</th><th class="sticky-top">17</th><th class="sticky-top">18</th><th class="sticky-top">19</th><th class="sticky-top">20</th><th class="sticky-top">21</th><th class="sticky-top">22</th><th class="sticky-top">23</th><th class="sticky-top">24</th><th class="sticky-top">25</th><th class="sticky-top">26</th><th class="sticky-top">27</th><th class="sticky-top">28</th><th class="sticky-top">29</th><th class="sticky-top">30</th>
					 
					 </tr>
					  </thead>	 
         <?php
          while($data = mysqli_fetch_assoc($run))
          {

           ?>
   	<tr>
   		<td><?php echo $data['dt'];?></td> 
<td style="text-align: center;"><?php echo $data['1'];?></td>
 <td style="text-align: center;"><?php echo $data['2'];?></td>
 <td style="text-align: center;"><?php echo $data['3'];?></td>		 
 <td style="text-align: center;"><?php echo $data['4'];?></td>
 <td style="text-align: center;"><?php echo $data['5'];?></td>
 <td style="text-align: center;"><?php echo $data['6'];?></td>
 <td style="text-align: center;"><?php echo $data['7'];?></td>
 <td style="text-align: center;"><?php echo $data['8'];?></td>
 <td style="text-align: center;"><?php echo $data['9'];?></td>
 <td style="text-align: center;"><?php echo $data['10'];?></td>
 <td style="text-align: center;"><?php echo $data['11'];?></td>
 <td style="text-align: center;"><?php echo $data['12'];?></td>
 <td style="text-align: center;"><?php echo $data['13'];?></td>
 <td style="text-align: center;"><?php echo $data['14'];?></td>
 <td style="text-align: center;"><?php echo $data['15'];?></td>
 <td style="text-align: center;"><?php echo $data['16'];?></td>
 <td style="text-align: center;"><?php echo $data['17'];?></td>
 <td style="text-align: center;"><?php echo $data['18'];?></td>
 <td style="text-align: center;"><?php echo $data['19'];?></td>
 <td style="text-align: center;"><?php echo $data['20'];?></td>
 <td style="text-align: center;"><?php echo $data['21'];?></td>
 <td style="text-align: center;"><?php echo $data['22'];?></td>
 <td style="text-align: center;"><?php echo $data['23'];?></td>
 <td style="text-align: center;"><?php echo $data['24'];?></td>
 <td style="text-align: center;"><?php echo $data['25'];?></td>
 <td style="text-align: center;"><?php echo $data['26'];?></td>
 <td style="text-align: center;"><?php echo $data['27'];?></td>
 <td style="text-align: center;"><?php echo $data['28'];?></td>
 <td style="text-align: center;"><?php echo $data['29'];?></td>
 <td style="text-align: center;"><?php echo $data['30'];?></td>

 
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
        ?>
</body>
</html>
<?php
?> 