<?php
//error_reporting(0);
if(isset($_POST['submit']))
{
 $name =$_POST['name'];
 $pass =$_POST['pass'];
 $conn = mysqli_connect('localhost','root','','ccc');
 $sql = "SELECT * FROM `regdb` WHERE name='$name' AND pass='$pass'";
 $run = mysqli_query($conn,$sql) ;


 if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>
   
     <table border="1px" cellspacing="0" align="center" style="margin-top:100px">
          <tr>
          <th colspan="3" bgcolor="blue"><h1>WELCOME</h1></th>
          </tr>
          <tr>
          <th>Registration</th><td><?php echo $data['registation'];?></td>
          <td rowspan="4"><img  height="100px" width="100px" src="image/<?php echo $data['img'];?>"></td>
          </tr>
          <tr>
          <th>Name</th><td><?php echo $data['name'];?></td>
          </tr>
          <tr>
          <th>Second Name</th><td><?php echo $data['fname'];?></td>
          </tr>
          <tr>
          <th>Mobile No</th><td><?php echo $data['mobile'];?></td>
          </tr>
          <tr>
          <th>Gender</th><td colspan="2"><?php echo $data['gender'];?></td>
          </tr>
          <tr>
          <th>Email</th><td colspan="2"><?php echo $data['email'];?></td>
          </tr>
          <tr>
          <th>D.O.B</th><td colspan="2"><?php echo $data['dob'];?></td>
          </tr>
          <tr>
          <th><a href="regupdate.php?reg=<?php echo $data['registation']?>">Edit</a></th><th colspan="2">Print</th>
          </tr>
          </table>
     <?php

  }
  else
  {
    echo "No Record Found";
    
  }
}
?>