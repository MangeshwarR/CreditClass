<!DOCTYPE html>
<html>
<head>
	<title>news</title>
	<style type="text/css">
		tr
	</style>
</head>
<body>
	 
	<body>
<form action="newsinsert.php" method="post" enctype="multipart/form-data">
<table align="center" style="margin-top:50px;"  border="1" cellspacing="0" bgcolor="white">
<tr><th colspan="2" align="center" bgcolor="blue"><h1 align="center">News</h1></th></tr>
 
   <tr>
      <th>
       Image
        </th>
         <th><input type="file" name="img" required="required"></th>
</tr>

<tr>
<th>Description </th><td><input type="textbox"  col="40" row="30" name="desc" Cols="50" Rows="10" placeholder="Description" required="required"></td>
</tr>
<tr>
    <th align="center"><input type="reset" value="Cancle" name="reset"></th> <th align="center"><input type="submit" value="Submit" name="submit" ></th>   
</tr>
<tr><td align="center" colspan="2" ><a href="index.php">Home</a></td> 
</tr>
</table>
</form>
</body>
</html>
 