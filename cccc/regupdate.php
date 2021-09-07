
<?php
 $reg = $_GET['reg'];
 $conn = mysqli_connect('localhost','root','','ccc');
 $sql ="SELECT * FROM `regdb` WHERE registation='$reg'";
 $run = mysqli_query($conn,$sql) ;
  $data=mysqli_fetch_assoc($run);
  
?>
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
<form action="regupdata.php" method="post" enctype="multipart/form-data">
<table align="center" style="margin-top:50px;" cellspacing="0" border="1px solid" height="600px"  bgcolor="white" width="500px">
<tr><th colspan="2" align="center" bgcolor="blue"><h1 align="center">REGISTATION</h1></th></tr>
<tr> 
<th>Name</th><td> <input type="text" name="name" value="<?php echo $data['name'];?>" required="required"> </td>
</tr>
<tr> 
<th>Second Name</th><td> <input type="text" name="sname" value="<?php echo $data['fname'];?>" required="required"></td>
</tr>
<tr>
<th> Mobile No.</th><td> <input type="text" name="mn" value="<?php echo $data['mobile'];?>" required="required"></td>
</tr>
 <tr>
<th> Gender</th><td> Male<input type="radio" name="gender" value="<?php echo $data['gender'];?>"/>  Female<input type="radio" name="gender" value="<?php echo $data['gender'];?>" /> </td>
</tr> 
<tr>
<th>Email</th> <td><input type="email" name="email" value="<?php echo $data['email'];?>" required="required"></td>
</tr>
<tr>  
   <th>D.O.B</th><td> <input type="date" name="dt" value="<?php echo $data['dob'];?>" required="required"></td>
   </tr> 
   <tr>
      <th>
       Image
        </th>
         <th><input type="file" name="img" value="<?php echo $data['img'];?>"/></th>
</tr>

<tr>
<th>Passward </th><td><input type="password" name="pass" value="<?php echo $data['pass'];?>"></td>
</tr>
<tr>
    <th align="center" bgcolor="red"><input type="reset" value="Cancle" name="reset"></th> <th align="center" bgcolor="green">
        <input type="hidden" value="<?php echo $data['registation'];?>" name="reg" >
    	<input type="submit" value="Submit" name="submit" ></th>   
</tr>
<tr><td align="center" bgcolor="yellow" colspan="2"><a href="index.php">Home</a></td> 
</tr>
</table>
</form>
</body>
</html>