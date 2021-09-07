<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="description" content="this is the webpage for improve your conectivity with goal"/>
<meta name="keywords"  content="business education, shope management, commerce class,B.com ,M.com 
,credit commerce classes,management,commerce learning material,accouting,income tax,syllabus,notes,book, video,pdf," />
 <meta name="author" content="credit commerce classes" />
 <meta name="viewport" content="width=device-width,initial-scale=1.0" />
 <meta http-equiv="refresh" content="";url=""  />
<title>Registation</title>

</head>
<body bgcolor="green">
<form action="registration.php" method="post" enctype="multipart/form-data">
<table align="center" style="margin-top:50px;" cellspacing="0" border="1px solid" height="600px"  bgcolor="white" width="500px">
<tr><th colspan="2" align="center" bgcolor="blue"><h1 align="center">REGISTATION</h1></th></tr>
<tr> 
<th>Name</th><td> <input type="text" name="name" placeholder="Name" required="required"></td>
</tr>
<tr> 
<th>Second Name</th><td> <input type="text" name="sname" placeholder="Second Name" required="required"></td>
</tr>
<tr>
<th> Mobile No.</th><td> <input type="text" name="mn" placeholder="Moblile No." required="required"></td>
</tr>
 <tr>
<th> Gender</th><td> Male<input type="radio" name="gender" value="Male" required="required">  Female<input type="radio" name="gender" value="Female" required="required"> </td>
</tr> 
<tr>
<th>Email</th> <td><input type="email" name="email" placeholder="Email" required="required"></td>
</tr>
<tr>  
   <th>D.O.B</th><td> <input type="date" name="dt" placeholder="D.O.B." required="required"></td>
   </tr> 
   <tr>
      <th>
       Image
        </th>
         <th><input type="file" name="img" required="required"></th>
</tr>

<tr>
<th>Passward </th><td><input type="password" name="pass" placeholder="Password" required="required"></td>
</tr>
<tr>
    <th align="center" bgcolor="red"><input type="reset" value="Cancle" name="reset"></th> <th align="center" bgcolor="green"><input type="submit" value="Submit" name="submit" ></th>   
</tr>
<tr><td align="center" bgcolor="yellow"><a href="index.php">Home</a></td><td align="center" bgcolor="yellow"><a href="registration.php">Already Exist</a></td>
</tr>
</table>
</form>
</body>
</html>