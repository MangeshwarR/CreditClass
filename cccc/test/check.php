<?php

if(isset($_POST['submit']))
{
	$dt= $_POST['dt'];
	$roll = $_POST['roll'];
	$conn = mysqli_connect('localhost','root','','test');
	$sql = "SELECT * FROM `att11th` WHERE date='$dt'";
	// $sql = "SELECT * FROM `t` WHERE roll='$roll'";
	 $run = mysqli_query($conn,$sql);
	 if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>

    <table>
    	<tr>
    		<th>Date</th><td><?php echo $data['date'];?></td>
    	</tr>
    	<tr> 
    		<th>1</th><td><?php echo $data['1'];?></td>
    		</tr>
    	<tr> 
    		<th>2</th><td><?php echo $data['2'];?></td>
    		</tr>
    	<tr> 
    		<th>3</th><td><?php echo $data['3'];?></td>
    		</tr>
    	<tr> 
    		<th>4</th><td><?php echo $data['4'];?></td>
    		</tr>
    	<tr> 
    		<th>5</th><td><?php echo $data['5'];?></td>
    		</tr>
    	<tr> 
    		<th>6</th><td><?php echo $data['6'];?></td>
    		</tr>
    	<tr> 
    		<th>7</th><td><?php echo $data['7'];?></td>
    		</tr>
    	<tr> 
    		<th>8</th><td><?php echo $data['8'];?></td>
    		</tr>
    	<tr> 
    		<th>9</th><td><?php echo $data['9'];?></td>
    		</tr>
    	<tr> 
    		<th>10</th><td><?php echo $data['10'];?></td>
    		</tr>
    	<tr> 
    		<th>11</th><td><?php echo $data['11'];?></td>
    		</tr>
    	<tr> 
    		<th>12</th><td><?php echo $data['12'];?></td>
    	</tr>
    	 
    </table>
 <?php
   }
   else
   {
   	echo "No Data Found";
   }
}
?>
<?php
if(isset($_POST['submit']))
{

	$roll = $_POST['roll'];
	$conn = mysqli_connect('localhost','root','','test');
	// $sql = "SELECT * FROM `att11th` WHERE date='$dt'";
	$sql = "SELECT * FROM `t` WHERE roll='$roll'";
	 $run = mysqli_query($conn,$sql);
	 if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>
<tr> 
    		<th>Roll</th><td><?php echo $data['roll'];?></td>
    	</tr>
    	<tr> 
    		<th>Name</th><td><?php echo $data['name'];?></td>
    	</tr>
    </table>
 <?php
   }
   else
   {
   	echo "No Data Found";
   }
}
?>