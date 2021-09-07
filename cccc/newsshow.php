 <?php
   include('head.php');
  ?>
 <?php
//error_reporting(0);
if(isset($_POST['submit']))
 $pass =$_POST['pass'];
 $conn = mysqli_connect('localhost','root','','ccc');
 $sql = "SELECT * FROM `news`";
 $run = mysqli_query($conn,$sql);


 if(mysqli_num_rows($run)>1)
  {
    $data=mysqli_fetch_assoc($run);
   ?>
   <style type="text/css">
    table
    {
      margin-top:15px;
       margin-left: 10px;
      margin-right:10px;
    }
     img
     {
      margin-left: 5px;
      margin-right:5px;
      height: 100px;
      width: 100px;
     }
   </style>
   
     <table>
          <tr>
          <th colspan="5" ><h1>News</h1></th>
          </tr>
          <tr><th colspan="5"><hr></th></tr>
          <tr>
           <td rowspan="3"><img src="imagess/<?php echo $data['Img'];?>"></td>
          </tr>
          <tr>
             <td rowspan="10"><?php echo $data['News'];?></td>
          </tr>
          <tr>
            <td></td>
          </tr>
           
          </table>
     <?php
      // echo "<a href='index.php'>Back</a>";
  }
  else
  {
    echo "No Record Found";
    
  }

?>