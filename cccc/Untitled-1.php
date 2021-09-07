<table border="1px" cellspacing="0" align="center">
<tr>
   <th colspan="3" bgcolor="blue"><h1>WELCOME</h1></th>
</tr>
 <tr>
 <th>Registration</th>
 </tr>
 <tr>
 <th>Name</th>
 </tr>
 <tr>
 <th>Second Name</th>
 </tr>
 <tr>
 <th>Mobile No</th>
 </tr>
 <tr>
 <th>Gender</th>
 </tr>
 <tr>
 <th>Email</th>
 </tr>
 <tr>
 <th>D.O.B</th>
 </tr>
 <tr>
 <th>Image</th>
</tr>
<?php
//error_reporting(0);
if(isset($_POST['submit']))
 //include('dbconn.php');
 $name =$_POST['name'];
 $pass =$_POST['pass'];
 $conn = mysqli_connect('localhost','root','','');
 $sql = "SELECT * FROM `regdb` WHERE name='$name' AND pass='$pass'";
 $run = mysqli_query($conn,$sql) ;
 if(mysqli_num_rows($run)<1)
  {
    echo "<tr><td colspan='2'> No Record Found</td></tr>";

  }
  else
  {
    //$count=0;
    while($data=mysqli_fetch_assoc($run))
     {
      /*/ $count++;<td><?php echo $count;?></td>*/
       ?>
       <tr>
        <td><?php echo $data['registation'];?></td>
        </tr>
        <tr>
        <td><?php echo $data['name'];?></td>
        </tr>
        <tr>
        <td><?php echo $data['sname'];?></td>
        </tr>
        <tr>
        <td><?php echo $data['mobile'];?></td>
        </tr>
        <tr>
        <td><?php echo $data['gender'];?></td>
        </tr>
        <tr>
        <td><?php echo $data['email'];?></td>
        </tr>
        <tr>
        <td><?php echo $data['dob'];?></td>
        </tr>
        <tr>
        <td><?php echo $data['img'];?></td>
        </tr>
         <?php
     }
  }

?>
</table>