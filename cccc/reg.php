
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
      margin-left: 20%; 
      padding: 100px;
      height: 1000px;
      width: 60%
    }
  </style>
</head>
<body>
 
<form action="reginsertdata.php" method="post" enctype="multipart/form-data">
<table align="center" style="margin-top:100px;"  cellspacing="0" >
 
<tr>
  <th colspan="2" align="center"><h1>REGISTRATION</h1></th>
</tr>

<tr>
  <th colspan="2"><hr></th>
</tr>


<tr>
      <th colspan="2" align="left">Persional Details--------</th> 
      </tr> 
  <!-- <tr>  -->
    <!-- <th>Roll No</th><td> <input type="text" name="roll" placeholder="Roll No" required="required"></td> -->
    <!-- </tr> -->
</tr>
 <tr> 
<th>Name</th><td> <input type="text" name="name" placeholder="Name" required="required"></td>
</tr>
  <tr> 
    <th>Father's Name</th><td> <input type="text" name="fname" placeholder="Father's Name" required="required"></td>
    </tr>
    <tr> 
      <th>Mother's Name</th><td> <input type="text" name="mname" placeholder="Mother's Name" required="required"></td>
      </tr>
  <tr> 
    <th>Mobile No</th><td> <input type="text" name="mn" placeholder="Mobile No" required="required"></td>
    </tr>
    <tr> 
      <th>Aadhhar</th><td> <input type="text" name="adhar" placeholder="Aadhhar" required="required"></td>
      </tr>
    
<tr>
<th> Gender</th><td> Male<input type="radio" name="gender" value="Male" required="required">  Female<input type="radio" name="gender" value="Female"required="required"> </td>
</tr> 
<tr>
<th>Email</th> <td><input type="email" name="email" placeholder="Email" required="required"></td>
</tr> 
<tr>
  <th>D.O.B</th> <td><input type="date" name="dob" placeholder="DOB" required="required"></td>
  </tr> 
   
  <tr>
    <th>Address</th>  
  <td><input type="text" name="vill" placeholder="Address" required="required"></td>
    </tr> 
     
<tr>
  <th colspan="2"><hr></th>
</tr>


    <tr>
      <th colspan="2" align="left">Previous Year Educational Detail--------</th> 
      </tr> 
    <tr>
      <th>Class</th> <td><input type="text" name="pclass" placeholder="Previous class name" required="required"></td>
      </tr> 
      <tr>
        <th>Trade</th> <td><input type="text" name="ptrd" placeholder="Trade" required="required"></td>
        </tr> 
         <tr>
        <th> Passing Year</th> <td><input type="year" name="pyear" placeholder=" Passing Year" required="required"></td>
        </tr> 
         <tr>
        <th> Board</th>  <td> U.P. Board<input type="radio" name="pboard" value="U.P. Board" required="required"> C.B.S.E. Board<input type="radio" name="pboard" value="C.B.S.E. Board"required="required"> </td>
        </tr> 
         <tr>
        <th>School/College Name</th> <td><input type="text" name="pcollg" placeholder="School/College Name" required="required"></td>
        </tr>
       
<tr>
  <th colspan="2"><hr></th>
</tr>


 <tr>
      <th colspan="2" align="left">Current Year Educational Detail--------</th> 
      </tr> 
    <tr>
      <th>Class Name</th> <td><input type="text" name="cclass" placeholder="Previous class name" required="required"></td>
      </tr> 
      <tr>
        <th>Trade</th> <td><input type="text" name="ctrd" placeholder="Trade" required="required"></td>
        </tr> 
        <tr>
        <th>Learn Subject</th> <td><input type="text" name="csubj" placeholder="Subjects Name" required="required"></td>
        </tr>
         <tr>
        <th> Year</th> <td><input type="year" name="cyear" placeholder=" Year" required="required"></td>
        </tr> 
         <tr>
        <th> Board</th>  <td> U.P. Board<input type="radio" name="cboard" value="U.P. Board" required="required"> C.B.S.E. Board<input type="radio" name="cboard" value="C.B.S.E. Board"required="required"> </td>
        </tr> 
         <tr>
        <th>School/College Name</th> <td><input type="text" name="ccollg" placeholder="School/College Name" required="required"></td>
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
  <th>Password</th>
    <td><input type="password" name="pass" placeholder="Password" required="required"></td>
</tr>

<tr>
     <!-- <th><a href="edit.php?reg=reg">Edit</a></th> -->
     <td align="center" colspan="2"><input type="submit" value="Submit" name="submit"></td>
	 
</tr>
</table>
</form>
</body>
</html>