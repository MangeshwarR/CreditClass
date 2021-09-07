<?php
session_start();
  $conn = mysqli_connect('localhost','root','','ccc');

function showdata()
  {
     global $conn;

      $query = "SELECT * FROM `regdb`";

      $run = mysqli_query($conn,$query);

      if($run == TRUE)
       {
           ?>
         <table border="1px solid" width="60%" align="center" cellspacing="0">
            <tr><th colspan="9" align="center" bgcolor="blue"><h1>STUDENTS DETAILS</h1></th></tr>
         <tr bgcolor="red">
         <th>Registration No</th><th>Fist Name</th><th>Second Name</th><th>Mobile No.</th><th>Gender</th><th>Email Id</th><th>D.O.B</th><th>Image</th><th>Password</th>        
         </tr>
         <?php
          while($data = mysqli_fetch_assoc($run))
          {

           ?>
           <tr align="center">
            <td><?php echo $data['registation']; ?> </td><td><?php echo $data['name'];?></td><td><?php echo $data['sname'];?></td><td><?php echo $data['mobile'];?></td><td><?php echo $data['gender'];?></td><td><?php echo $data['email'];?></td><td><?php echo $data['dob'];?></td><td><?php echo $data['img'];?></td> <td><?php echo $data['pass'];?></td>
           </tr>
           <?php
          }
         ?>
         </table>
         <?php

       }
    else
       {
        echo "Error !!";
       }
  }

?>

<html>
    <head>
        <title>Show data</title>
    </head>
    <body>
        <?php
          showdata();
          echo "<a href='index.php'>Back</a>";
        ?>
    </body>
</html>