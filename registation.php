<!DOCTYPE html>
<html>
<head>
<title>Registation</title>
</head>
<body bgcolor="green">
<form action="rg.php" method="post">
<table align="center" style="margin-top:50px;" border="1px solid" height="500px"  bgcolor="white" width="500px">
<tr><th colspan="2" align="center" bgcolor="blue"><h1 align="center">REGISTATION</h1></th></tr>
<tr> 
<th>Name:-</th><td> <input type="text" name="name" placeholder="Name" required="required"></td>
</tr>
<tr> 
<th>Second Name:-</th><td> <input type="text" name="sname" placeholder="Second Name" required="required"></td>
</tr>
<tr>
<th> Mobile No.:-</th><td> <input type="text" name="mn" placeholder="Moblile No." required="required"></td>
</tr>
 <tr>
<th> Gender :-</th><td> Male<input type="radio" name="gender" value="Male" required="required">  Female<input type="radio" name="gender" value="Female"required="required"> </td>
</tr> 
<tr>
<th>Email:-</th> <td><input type="email" name="email" placeholder="Email" required="required"></td>
</tr>
<tr>  
   <th>D.O.B:-</th><td> <input type="date" name="dt" placeholder="D.O.B." required="required"></td>
   </tr>
<tr>   
   <th>COURSE:-</th><td><select name="sl" required="required">
            <option>Select</option>
			<option>First semester</option>
			<option>Second semester</option>
			<option>Third semester</option>
           </select></td>
</tr>
<tr>
<th>Passward:- </th><td><input type="password" name="pass" placeholder="Password" required="required"></td>
</tr>
<tr>
     <th align="center" bgcolor="green"><input type="submit" value="Submit" name="sub" ></th>   <th align="center" bgcolor="red"><input type="reset" value="Cancle" name="reset"></th>
</tr>
<tr>><td align="center" bgcolor="yellow" colspan="2"><a href="Library.html">Home</a></td>
</tr>
</table>
</form>
</body>
</html>