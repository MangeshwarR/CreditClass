
 <?php
   include('head.php');
  ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
  <style type="text/css">
    table
    {
      margin-left: 30%; 
      padding: 150px;
    }
  </style>
 </head>
 <body>
 <!-- <a href="index.php">Back</a> -->
<form action="studentlogin.php" method="post">
	<table>
		<tr>
			<th colspan="2"><h1>Login Student</h1></th>
		</tr>
    <tr>
      <th colspan="2"><hr></th>
    </tr>
		<!-- <tr> -->
			<!-- <th>roll</th><td><input type="text" name="roll"></td> -->
		<!-- </tr> -->
    <tr>
      <th>Name</th><td><input type="text" name="name"></td>
    </tr>
		<tr>
            <th>Password</th><td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <th><input type="reset" name="cancle" value="Cancle"></th>
            <th><input type="submit" name="submit" value="Login"></th>
        </tr>
  </table>
</form>
 </body>
 </html>