<?php
ob_start();
include('topheader.php');

?>
<div class="col-md-12">
     
	 <h1>Order Data</h1><br>
  <!--Main layout-->
  <html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>Order Details</title>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	
</head>
<body>
	
	<?php
	
		include('dbcon.php');
		$name=$_SESSION['user'];
		$sql="SELECT * FROM `tblorder` where username='$name'";
		$result=mysqli_query($con,$sql);
		echo "<div class=\"table-responsive\">";
		echo "<table class=\"table table-striped table-hover\"><tr><th style=\"width:50px;\">PRODUCT NAME</th><th style=\"width:50px;\">QUANTITY</th><th style=\"width:40px;\">TOTAL</th><th style=\"width:20px;\">STATUS</th><th>CDATE</th></tr>";
		
		while($line=mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $line['proname'];
				echo "</td>";
				echo "<td>";
				echo $line['quantity'];
				echo "</td>";
				echo "<td>";
				echo $line['total'];
				echo "</td>";
				echo "<td>";
				echo $line['status'];
				echo "</td>";
				echo "<td>";
				echo $line['cdate'];
				echo "</td>";
				
				echo "</tr>";
			}

				echo "</table>";
				
		echo "</div>";
		?>
	
	
</body>
</html>

 </div>
<?php
include('footer.php');
?>
