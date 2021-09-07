   <?php
$conn = mysqli_connect('localhost','root','','stddb');

function showdata()
  {
     global $conn;

      $query = "SELECT * FROM `insertdb`";

      $run = mysqli_query($conn,$query);

      if($run == TRUE)
       {
           ?>
         <table border="1px solid" width="60%" align="center" cellspacing="0">
            <tr><th colspan="15" align="center" bgcolor="blue"><h1>STUDENTS DETAILS</h1></th></tr>
         <tr bgcolor="red">
         <th>Id</th><th>Roll No</th><th>Name</th><th>Father's Name</th><th>Mother's Name</th><th>Mobile No</th><th>Aadhhar</th><th>Gender</th><th>Email Id</th><th>D.O.B</th><th>Village</th><th>Previous classes</th><th>P Trade</th><th>Image</th ><th>Password</th>
         </tr>
         <?php
        while($data = mysqli_fetch_assoc($run))
          {

           ?>
           <tr align="center">
           <td><?php echo $data['id'];?></td><td><?php echo $data['Roll'];?></td><td><?php echo $data['Name'];?></td><td><?php echo $data['Fname'];?></td><td><?php echo $data['Mname'];?></td><td><?php echo $data['Mobile'];?></td><td><?php echo $data['Adhar'];?></td><td><?php echo $data['Gender'];?></td><td><?php echo $data['Email'];?></td><td><?php echo $data['Dob'];?></td><td><?php echo $data['Vill'];?></td><td><?php echo $data['Pclass'];?></td><td><?php echo $data['Ptrd'];?></td><td><img  height="50px" width="50px" src="images/<?php echo $data['Img'];?>"></td><td><?php echo $data['Password'];?></td>
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
          echo "<a href='stud.html'>Back</a>";
        ?>
    </body>
</html>