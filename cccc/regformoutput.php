<?php
//error_reporting(0);
if(isset($_POST['submit']))
 $roll =$_POST['roll'];
 $pass =$_POST['pass'];
 $conn = mysqli_connect('localhost','root','','ccc');
 $sql = "SELECT * FROM `logdb` WHERE roll='$roll' AND pass='$pass'";
 $run = mysqli_query($conn,$sql);


 if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>

   
<!DOCTYPE html>
<html>
<head>
	<style type="text/css"> 
*{
	margin: 0px; padding: 0px;
}
h1{
	margin-left: 32px;
	position: relative;
}

h3{
	margin-left: 32px;
	position: relative;
}
p{
	margin-left: 32px;
	position: relative;
}

	</style>
	<title>Out of the admission form </title>
</head>
<body><div width="200" height="400">
<table align="center">
<tr>
	<th  colspan="2">
       <h1><big>Cr.</big> Credit Commerce Classes</h1><br/>
   </th>
</tr>
<tr>
	<th>Registration No:</th><th><?php echo $data['roll'];?></th>
</tr>
<tr>
	<th>Candidate's Name:</th><th><?php echo $data['name'];?></th>
</tr>
<tr>
	<th>Father's Name:</th><th><?php echo $data['sname'];?></th>
</tr>
<tr>
   <th>Mother's Name:</th><th><?php echo $data['mobile'];?></th>
</tr>
<tr>
	<th>Adress:</th><th><?php echo $data['gender'];?></th>. <?php echo "$dist "; ?></th>
</tr>
Date of Birth:<?php echo "$dob "; ?><br/>
Mobile No:<?php echo "$pmob "; ?>. <?php echo "$smob "; ?><br/>
Adhar No:<?php echo "$adhr "; ?><br/>
G-mail:<?php echo "$gmail "; ?><br/></P>
<h3><strong>Previous </strong> Year Education Detail</h3><br/>
<p>Class Name:<?php echo "$pclass "; ?><br/>
Education Board:<?php echo "$pboe "; ?><br/>
Trade:<?php echo "$ptrade "; ?><br/>
No of Subject:<?php echo "$pnos "; ?><br/>
Subject's Name:<?php echo "$sub1 "; ?><?php echo "$sub2 "; ?><?php echo "$sub3 "; ?><?php echo "$sub4 "; ?><?php echo "$sub5 "; ?><br/>
College's Name:<?php echo "$pcname "; ?></p><br/>
<h3><strong>Current </strong> Year Education Detail</h3><br/>
<p>Class Name:<?php echo "$cclass "; ?><br/>
Education Board:<?php echo "$cboe "; ?><br/>
Trade:<?php echo "$ctrade "; ?><br/>
No of Subject:<?php echo "$cnos "; ?><br/>
Subject's Name: <?php echo "$ "; ?><br/>
College's Name:<?php echo "$ ccame"; ?><br/>
I <?php echo "$name "; ?>s/o <?php echo "$fname "; ?>declare that all the information given by me best of my knowledge.<br/> 
      Parent's:_______________________Date____________________
   </p>  <br/> <hr/>
</p><br/></div>
<h1><strong>Cr.</strong> Credit Commerce Classes</h1><br/>
<p>
	Dear <?php echo "$name "; ?>your Admission is success<br/>
	Registration No:<?php echo "$regno "; ?><br/>
Roll No:<?php echo "$ "; ?><br/>
Subject Name:<?php echo "$ "; ?><br/>
  Authorization <br/>
</p>

</body>
</html>
<?php

  }
  else
  {
    echo "No Record Found";
    
  }

?>