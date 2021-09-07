 <?php 
  if(isset($_POST['dt']))
    {
      $roll = $_POST['roll'];
    }
    else
    {
  ?>
  
 <!DOCTYPE html>
 <html>
 <head>
  <title></title>
 </head>
 <body>
   <form action="" method="post">
    <table>
      <tr>
        <td>Roll No</td><td><input type="text" name="roll"></td>
      </tr>
       <tr>
        <td>Date</td><td><input type="date" name="dt"></td>
      </tr>
      <tr>
        <th colspan="2"><input type="submit" value="Submit" name="submit"></th>
      </tr>
    </table>
   </form>
   <?php
}
?>
 </body>
 </html>
<?php

if(isset($_POST['submit']))
{
	$dt= $_POST['dt'];
	$roll = $_POST['roll'];
	$conn = mysqli_connect('localhost','root','','ccc');
	$sql = "SELECT * FROM `att11th` WHERE date='$dt'";
	// $sql = "SELECT * FROM `t` WHERE roll='$roll'";
	 $run = mysqli_query($conn,$sql);
	 if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>

    <table align="center">

<tr>
  <th colspan="2"><h1>Attandence Detail</h1></th> 
</tr>
<tr>
  <td colspan="2"><hr/></td>
</tr>
<tr>
  <td>Roll No</td><td> <?php echo $data['roll'];?></td>
</tr>
<tr>
  <td>Student Name</td><td> <?php echo $data['name'];?></td>
</tr>
<tr>
  <td>Class</td><td> <?php echo $data['class'];?></td>
</tr>
<tr>
	<td>Date --</td>
</tr>
<tr> 
  <td><?php echo $data['date'];?></td><td><?php echo $data['1'];?></td>
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
 