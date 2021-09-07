 <?php
 $roll = $_POST['roll'];
 $name = $_POST['name'];
 $fname = $_POST['fname'];
 
 $num = $_POST['sub'];
 $conn = mysqli_connect('localhost','root','','test');
 $sql = "INSERT INTO `test_1`(`roll`,`name`, `fname`, `sub`) VALUES ('$roll','$name','$fname','$num')";
 $run = mysqli_query($conn,$sql);
 if ($run == true) 
 {
    // echo "Success";
 } 
 else 
 {
    echo "Error";
  }
 
?>


 /* <?php
//error_reporting(0);

/* if(isset($_POST['submit']))
{
  
  $roll = $_POST['roll'];
 $conn = mysqli_connect('localhost','root','','test');
 $sql = "SELECT * FROM `test_1` WHERE name='$name'";
 $run = mysqli_query($conn,$sql) ;


 if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>
 		<table>
 			<tr>
 				<th colspan="2"><h1>WELLCOME TO MY CHANNEL</h1></th>
 				
 			</tr>

 			<tr>

 				<td>Roll No</td><td><?php echo $data['roll'];?></td>
 				<hr/>
 			</tr>
 			<tr>
 				<td>Name</td><td><?php echo $data['name'];?></td>
 			</tr>
 			<tr>
 				<td>Father Name</td><td><?php echo $data['fname'];?></td>
 			</tr>
 			<tr>
 				<td>Date</td><td><?php echo $data['date'];?></td>
 			</tr>
 			<tr>
 				<td>test No</td><td><?php echo $data['sub'];?></td>
 			</tr>
 		</table>
 		<?php
 	}
  else
  {
  	echo "Error";
  }
 }
?>*/