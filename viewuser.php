<?php
 include('topheader.php');
	
?>
	<div class="col-md-12">
     
	 <h1>View Data</h1><br>
  
  <?php
	
  include('dbcon.php');
    
  
  $sql="SELECT * FROM `tblbuyer`";
  
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  
	
  
  
  while($line=mysqli_fetch_array($result))
   {
    echo "<table class=\"table table-hover table-striped\">";
    
	echo "</tr><tr ><td>USERNAME</td>";
    echo "<td>";
    echo $line['username'];
    echo "</td>";
    echo "<tr ><td>ADDRESS</td>";
    echo "<td>";
    echo $line['address'];
    echo "</td>";
    echo "</tr><tr ><td>CITY</td>";
    echo "<td>";
    echo $line['city'];
    echo "</td>";
    echo "</tr><tr ><td>PINCODE</td>";
    echo "<td>";
    echo $line['status'];
    echo "</td>";
	 echo "</tr><tr ><td>STATUS</td>";
    echo "<td>";
    echo $line['pincode'];
    echo "</td>";
    echo "</tr><tr ><td>Reg Date</td>";
    echo "<td>";
    echo $line['cdate'];
    echo "</td>";
    echo "</tr>";
    echo "</table>";
   }

  ?>
  </div>
  
 <?php
 include('footer.php');
?>
