<?php
$roll =  $_POST['roll'];
$name =  $_POST['name'];
$fname =  $_POST['fname'];
$dt =  $_POST['dt'];
$subn =  $_POST['subn'];
$conn = mysqli_connect('localhost','root','','test');
$sql = "INSERT INTO `t`( `roll`, `name`, `fname`, `date`, `subn`) VALUES ( '$roll','$name','$fname','$dt','$subn')";
 $run = mysqli_query($conn,$sql);
 if ($run == true) 
 {
    echo  "Success";
 } 
 else 
 {
    echo  "Error";
  }

?>
<?php
if($_POST['submit'])
{
	$roll =  $_POST['roll'];
	 $sql = "SELECT * FROM `t` WHERE name='$name'";
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
 				<td>test No</td><td><?php echo $data['subn'];?></td>
 			</tr>
 		</table>
 		<?php
 	}
  else
  {
  	echo "Error";
  }
 }
?>