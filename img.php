 <html>
    <head>
        <title>Image Uploading</title>
    </head>
    <body>
        <form method="post" action="index.php" enctype="multipart/form-data">
            <table align="center" cellspacing="0">
                <tr>
                    <th>Name</th><td><input type="text" name="name" placeholder="Enter Name"></td>                    
                </tr>
                <tr>
                    <th>Roll No</th><td><input type="number" name="roll" placeholder="Enter Rollno"></td>                    
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="search"></td>                    
                </tr>
            </table>







         <input type="file" name="img1" required="required">
         <input type="submit" name="submit" value="Upload">
    </body>
</html>
<?php
  if(isset($_POST['submit']));
  {
    $imgname = $_FILES['img1']['name'];
    $tempimgname = $_FILES['img1']['tmp_name'];
    $conn = mysqli_connect('localhost','root','','stddb');// or die(mysqli_error());
    move_uploaded_file($tempimgname,"images/$imgname");
    $sql = "INSERT INTO `uploadimg`(`Images`) VALUES ('$imgname')";
    $run = mysqli_query($conn,$sql);
        echo  "Image Upload Successful<br>";
  }
?>