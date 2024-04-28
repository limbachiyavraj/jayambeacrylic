<?php
 
 ob_start();
 include('topheader.php');
	
?>
	<div class="col-md-12">
     
	<center><h1>Profile Details</h1><br></center>
  
  <?php
	
  include('dbcon.php');
  
  
  $name=$_SESSION['user'];
  $sql="SELECT * FROM `tblbuyer` where username='$name'";
  
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  
	
  
  
  while($line=mysqli_fetch_array($result))
   {
    echo "<table class=\"table table-hover table-striped\">";
    $i= $line['photo'];
	echo"<td>";
	echo "<img src=\"$i\" style=\"height:100px;width:100px;border-radius:100px;\" />";
    echo"</td>";
	
	echo "<tr ><td>FIRSTNAME</td>";
    echo "<td>";
    echo $line['firstname'];
    echo "</td>";
    echo "</tr><tr ><td>LASTNAME</td>";
    echo "<td>";
    echo $line['lastname'];
    echo "</td>";
    echo "</tr><tr ><td>USERNAME</td>";
    echo "<td>";
    echo $line['username'];
    echo "</td>";
    echo "</tr><tr ><td>EMAILID</td>";
    echo "<td>";
    echo $line['email'];
    echo "</td>";
	echo "</tr><tr ><td>MOBILE NO</td>";
    echo "<td>";
    echo $line['mobileno'];
    echo "</td>";
    echo "</tr><tr ><td>Reg Date</td>";
    echo "<td>";
    echo $line['cdate'];
    echo "</td>";
    echo "</tr>";
    echo "</table>";
   }
echo "<a href=\"update.php?id=$id\"><input type=\"submit\" id=\"btsubmit\" name=\"btsubmit\" value=\"Update\" /></a>";
  ?>
  </div>
  
 <?php
 include('footer.php');
?>
