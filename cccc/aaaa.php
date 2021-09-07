<?php
if($_POST['submit'])
{
	$dt =  $_POST['dt'];
	 $sql = "SELECT * FROM `att12th` WHERE date='$dt'"; 
 $run = mysqli_query($conn,$sql) ;


 if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
   ?>
 		<table>
 			<tr>
 				<th colspan="28"><h1>12th Attandence</h1></th>
 				
 			 
 		 
 			<tr>
 			<tr>
 				<td rowspan="2">Date</td><td rowspan="2"><?php echo $data['date'];?></td><td>Roll No</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td> 
 			</tr>
 			<tr>
 				 <td></td><td><?php echo $data['1'];?></td><td><?php echo $data['2'];?></td><td><?php echo $data['3'];?></td><td><?php echo $data['4'];?></td><td><?php echo $data['5'];?></td><td><?php echo $data['6'];?></td><td><?php echo $data['7'];?></td><td><?php echo $data['8'];?></td><td><?php echo $data['9'];?></td><td><?php echo $data['10'];?></td><td><?php echo $data['11'];?></td><td><?php echo $data['12'];?></td><td><?php echo $data['13'];?></td><td><?php echo $data['14'];?></td><td><?php echo $data['15'];?></td><td><?php echo $data['16'];?></td><td><?php echo $data['17'];?></td><td><?php echo $data['18'];?></td><td><?php echo $data['19'];?></td><td><?php echo $data['20'];?></td><td><?php echo $data['21'];?></td><td><?php echo $data['22'];?></td><td><?php echo $data['23'];?></td><td><?php echo $data['24'];?></td><td><?php echo $data['25'];?></td><td><?php echo $data['26'];?></td>
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