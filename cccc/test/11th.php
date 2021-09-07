<?PHP

$dt =  $_POST['dt'];
$roll =  $_POST['roll'];
$name =  $_POST['name'];
$fname =  $_POST['fname'];
$class =  $_POST['class'];

$a =  $_POST['a'];
$b =  $_POST['b'];
$c =  $_POST['c'];
$d =  $_POST['d'];
$e =  $_POST['e'];
$f =  $_POST['f'];
$g =  $_POST['g'];
$h =  $_POST['h'];
$i =  $_POST['i'];
$j =  $_POST['j'];
$k =  $_POST['k'];
$l =  $_POST['l'];
$m =  $_POST['m'];
$n =  $_POST['n'];
$o =  $_POST['o'];
$p =  $_POST['p'];
$q =  $_POST['q'];
$r =  $_POST['r'];
$s =  $_POST['s'];
$t =  $_POST['t'];
$u =  $_POST['u'];
$v =  $_POST['v'];
$w =  $_POST['w'];
$x =  $_POST['x'];
$y =  $_POST['y'];
$z =  $_POST['z'];
 
 $conn = mysqli_connect('localhost','root','','test');
$sql = "INSERT INTO `att11th`(`date`, `roll`, `name`, `fname`, `class`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`) VALUES ('$dt','$roll','$name','$fname','$class','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z')";
 $run = mysqli_query($conn,$sql);
 if ($run == true) 
 {
    echo "Success";
 } 
 else 
 {
    echo "Error";
  }
?>
<?php
if($_POST['submit'])
{
	$dt =  $_POST['dt'];
	 $sql = "SELECT * FROM `att11th` WHERE date='$dt'";
 $run = mysqli_query($conn,$sql) ;


 if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>
 		<table>
 			<tr>
 				<th colspan="2"><h1>WELLCOME TO MY CHANNEL</h1></th>
 				
 			</tr>
 			
 				<td>Date</td><td><?php echo $data['date'];?></td>
 				
 			</tr>
 			<tr>
 			
 				<td>Roll No</td><td><?php echo $data['roll'];?></td>
 				
 			</tr>
 					<tr>
 			
 				<td>Name</td><td><?php echo $data['name'];?></td>
 				
 			</tr>
 					<tr>
 			
 				<td>Father's Name</td><td><?php echo $data['fname'];?></td>
 				
 			</tr>
 					<tr>
 			
 				<td>Class</td><td><?php echo $data['class'];?></td>
 				
 			</tr>
 					
 			<tr>

 				<td>Roll No</td><td>Attandenc</td>
 				

 			<tr>
 			<tr>
 				<td>1</td><td><?php echo $data['1'];?></td>
 			</tr>
 			<tr>
 				<td>2</td><td><?php echo $data['2'];?></td>
 			</tr>
 			<tr>
 				<td>3</td><td><?php echo $data['3'];?></td>
 			</tr>
 			<tr>
 				<td>4</td><td><?php echo $data['4'];?></td>
 			</tr>
 			<tr>
 				<td>5</td><td><?php echo $data['5'];?></td>
 			</tr>
 			<tr>
 				<td>6</td><td><?php echo $data['6'];?></td>
 			</tr>
 			<tr>
 				<td>7</td><td><?php echo $data['7'];?></td>
 			</tr>
 			<tr>
 				<td>8</td><td><?php echo $data['8'];?></td>
 			</tr>
 			<tr>
 				<td>9</td><td><?php echo $data['9'];?></td>
 			</tr>
 			<tr>
 				<td>10</td><td><?php echo $data['10'];?></td>
 			</tr>
 			<tr>
 				<td>11</td><td><?php echo $data['11'];?></td>
 			</tr>
 			<tr>
 				<td>12</td><td><?php echo $data['12'];?></td>
 			</tr>
 			<tr>
 				<td>13</td><td><?php echo $data['13'];?></td>
 			</tr>
 			<tr>
 				<td>14</td><td><?php echo $data['14'];?></td>
 			</tr>
 			<tr>
 				<td>15</td><td><?php echo $data['15'];?></td>
 			</tr>
 			<tr>
 				<td>16</td><td><?php echo $data['16'];?></td>
 			</tr>
 			<tr>
 				<td>17</td><td><?php echo $data['17'];?></td>
 			</tr>
 			<tr>
 				<td>18</td><td><?php echo $data['18'];?></td>
 			</tr>
 			<tr>
 				<td>19</td><td><?php echo $data['19'];?></td>
 			</tr>
 			<tr>
 				<td>20</td><td><?php echo $data['20'];?></td>
 			</tr>
 			<tr>
 				<td>21</td><td><?php echo $data['21'];?></td>
 			</tr>
 			<tr>
 				<td>22</td><td><?php echo $data['22'];?></td>
 			</tr>
 			<tr>
 				<td>23</td><td><?php echo $data['23'];?></td>
 			</tr>
 			<tr>
 				<td>24</td><td><?php echo $data['24'];?></td>
 			</tr>
 			<tr>
 				<td>25</td><td><?php echo $data['25'];?></td>
 			</tr>
 			<tr>
 				<td>26</td><td><?php echo $data['26'];?></td>
 			</tr>
 			 
 		</table>
 		<?php
 	}
  else
  {
  	echo "Error";
  }
 }
?>