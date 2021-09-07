<?php
error_reporting(0);
$image = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];
move_uploaded_file($tempname, "imagess/$image");
$desc = $_POST['desc'];
$conn = mysqli_connect('localhost','root','','ccc');
$sql = "INSERT INTO `news`( `Img`, `News`) VALUES ('$image','$desc')";
$run = mysqli_query($conn,$sql);
if ($run == true)
 {
	echo "insert success<br>";
	echo "<a href='newsshow.php'>View News</a><br>";
	echo "<a href='news.php'>Back</a>";

} else
 {
	  echo "Error";
}


?>