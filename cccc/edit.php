
<?php
 $reg = $_GET['reg'];
 $conn = mysqli_connect('localhost','root','','ccc');
 $sql ="SELECT * FROM `user` WHERE reg='$reg'";
 $run = mysqli_query($conn,$sql) ;
  $data=mysqli_fetch_assoc($run);
  
?>
 <?php
   include('head.php');
  ?>
<!DOCTYPE html>
<html>
<head>
<title>Store Student data</title>
 <style type="text/css">
    table
    {
      margin-left: 30%; 
      padding: 100px;
    }
  </style>
</head>
<body>
 
<form action="reginsertdata.php" method="post" enctype="multipart/form-data">
<table align="center" style="margin-top:100px;"  cellspacing="0" >
 
<tr>
  <th colspan="2" align="center"><h1>REGISTATION</h1></th>
</tr>



<tr>
      <th colspan="2" align="left">Persional Details--------</th> 
      </tr> 
  <tr> 
    <th>Roll No</th><td> <input type="text" name="roll" value="<?php echo $data['cname'];?>" required="required"></td>
    </tr>
</tr>
 <tr> 
<th>Name</th><td> <input type="text" name="name" value="<?php echo $data['cname'];?>" required="required"></td>
</tr>
  <tr> 
    <th>Father's Name</th><td> <input type="text" name="fname" value="<?php echo $data['fname'];?>" required="required"></td>
    </tr>
    <tr> 
      <th>Mother's Name</th><td> <input type="text" name="mname" value="<?php echo $data['mname'];?>" required="required"></td>
      </tr>
  <tr> 
    <th>Mobile No</th><td> <input type="text" name="mn" value="<?php echo $data['mobile'];?>" required="required"></td>
    </tr>
    <tr> 
      <th>Aadhhar</th><td> <input type="text" name="adhar" value="<?php echo $data['adhar'];?>" required="required"></td>
      </tr>
    
<tr>
<th> Gender</th><td> Male<input type="radio" name="gender" value="Male" required="required">  Female<input type="radio" name="gender" value="Female"required="required"> </td>
</tr> 
<tr>
<th>Email</th> <td><input type="email" name="email" value="<?php echo $data['email'];?>" required="required"></td>
</tr> 
<tr>
  <th>D.O.B</th> <td><input type="date" name="dob" value="<?php echo $data['dod'];?>" required="required"></td>
  </tr> 
   
  <tr>
    <th>Address</th>  
  <td><input type="text" name="vill" value="<?php echo $data['addss'];?>" required="required"></td>
    </tr> 


    <tr>
      <th colspan="2" align="left">Previous Year Educational Detail--------</th> 
      </tr> 
    <tr>
      <th>Class</th> <td><input type="text" name="pclass" value="<?php echo $data['pclass'];?>" required="required"></td>
      </tr> 
      <tr>
        <th>Trade</th> <td><input type="text" name="ptrd" value="<?php echo $data['ptrd'];?>" required="required"></td>
        </tr> 
         <tr>
        <th> Passing Year</th> <td><input type="year" name="pyear" value="<?php echo $data['pyear'];?>" required="required"></td>
        </tr> 
         <tr>
        <th> Board</th>  <td> U.P. Board<input type="radio" name="pboard" value="U.P. Board" required="required"> C.B.S.E. Board<input type="radio" name="pboard" value="C.B.S.E. Board"required="required"> </td>
        </tr> 
         <tr>
        <th>School/College Name</th> <td><input type="text" name="pcollg" value="<?php echo $data['pcollg'];?>" required="required"></td>
        </tr>


 <tr>
      <th colspan="2" align="left">Current Year Educational Detail--------</th> 
      </tr> 
    <tr>
      <th>Class Name</th> <td><input type="text" name="cclass" value="<?php echo $data['cclass'];?>" required="required"></td>
      </tr> 
      <tr>
        <th>Trade</th> <td><input type="text" name="ctrd" value="<?php echo $data['ctrd'];?>" required="required"></td>
        </tr> 
        <tr>
        <th>Learn Subject</th> <td><input type="text" name="csubj" value="<?php echo $data['csubj'];?>" required="required"></td>
        </tr>
         <tr>
        <th> Year</th> <td><input type="year" name="cyear" value="<?php echo $data['cyear'];?>" required="required"></td>
        </tr> 
         <tr>
        <th> Board</th>  <td> U.P. Board<input type="radio" name="cboard" value="U.P. Board" required="required"> C.B.S.E. Board<input type="radio" name="cboard" value="C.B.S.E. Board"required="required"> </td>
        </tr> 
         <tr>
        <th>School/College Name</th> <td><input type="text" name="ccollg" value="<?php echo $data['ccollg'];?>" required="required"></td>
        </tr>


  
  <tr>
    <th>
     Image
      </th>
       <td><input type="file" name="img"></td>
</tr>

<!-- <tr> 
    <th>
     Sign
      </th>
       <td><input type="file" name="sign"></td>
</tr>-->

<tr>
  <th>Passward</th>
    <td><input type="password" name="pass" value="<?php echo $data['pass'];?>" required="required"></td>
</tr>

<tr>
     <th><a href="reg.php?reg=reg>Edit</a></th>
     <td><input type="submit" value="Submit" name="submit"></td>
	 
</tr>
</table>
</form>
</body>
</html>