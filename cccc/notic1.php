 <?php
 
	 // error_reporting(0);
	$roll = $_POST['roll'];
	$name = $_POST['name'];
	$class = $_POST['class'];
	$notic = $_POST['notic'];
	$conn = mysqli_connect('localhost','root','','ccc');
	$sql = "INSERT INTO `noticdb`(`roll`, `name`, `class`, `notic`) VALUES ('$roll','$name','$class','$notic')";
	// "INSERT INTO `noticdb`(`roll`, `name`, `class`, `notic`) VALUES ('$roll','$name','$class','$notic')";
	$run = mysqli_query($conn,$sql);
	if ($run == true)
	 {
		 echo "Success";
	}
	 else
	 {
		 echo "Error.......";
	}
 ?>