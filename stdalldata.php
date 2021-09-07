


<?php
 $conn = mysqli_connect('localhost','root','','ccc');

function showdata()
  {
     global $conn;

      $query = "SELECT * FROM `addmision`";

      $run = mysqli_query($conn,$query);

      if($run == TRUE)
       {
           ?>
         <table align="center" border="1px solid" cellspacing="0">
<tr>
	<th  colspan="30">
       <h1><big>Cr.</big> Credit Commerce Classes</h1><hr/>
   </th>
</tr>
   <tr>
   	<th colspan="30">
	  <h3>ADMISSION FORM</h3><br/>
	</th>
</tr>
<tr>
	<td>Registration No:</td> <td>Candidate's Name:</td><td>Father's Name:</td><td>Mother's Name:</th><th>Gender:</th><td>Mobile No:</th><td>Adhar No:</th><td>G-mail:</th><td >Date of birth:</th><td colspan="3">Address:</td><td>Previous year details:</th><td>Class:</th><td>Trade:</th><td>Passing year:</th><td>Result:</th><td>College Name:</th><td>Current details:</th><td>Class:</th><td>Trade:</th><td>Learn Subject:</th><td>Board:</th><td>Aadhaar Front image:</th><td>Aadhaar Front image:</th><td>Student image:</th><td>Student sign</th><td></td><td></td>
	
	 
</tr>
<?php
          while($data = mysqli_fetch_assoc($run))
          {

           ?>

<tr>
	<td><?php echo $data['reg'];?></td><td><?php echo $data['cname'];?></td><td><?php echo $data['fname'];?></td><td><?php echo $data['mname'];?></th><td><?php echo $data['gender'];?></th><td> <?php echo $data['mob'];?></td><td> <?php echo $data['adhar'];?></td> <td> <?php echo $data['email'];?></td><td> <?php echo $data['dob'];?></td><td><?php echo $data['vill'];?></td><td> <?php echo $data['block'];?></td><td> <?php echo $data['dist'];?></td><td></td></td><td> <?php echo $data['class'];?></td><td> <?php echo $data['trade'];?></td><td> <?php echo $data['pec'];?></td><td> <?php echo $data['obmark'];?>/<?php echo $data['tomark'];?></td><td> <?php echo $data['collname'];?></td><td></td> <td> <?php echo $data['cclass'];?></td><td> <?php echo $data['ctrade'];?></td><td> <?php echo $data['lsub'];?></td><td> <?php echo $data['board'];?></td><td><img  height="90px" width="100px" src="adhar/<?php echo $data['afimg'];?>"></td><td><img  height="90px" width="100px" src="adhar/<?php echo $data['abimg'];?>"></td><td><img  height="100px" width="90px" src="images/<?php echo $data['img'];?>"></td><td><img  height="50px" width="90px" src="signature/<?php echo $data['sign'];?>"></td><td><a href="edit.php?reg=<?php echo $data['reg'];?>"><input type="submit" name="submit" value="Edit"></a>  
</td><td><a href="edit.php">Delete</a></td>
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
           
        ?>
    </body>
</html>