<?php
	ob_start();
	include('header.php');

?>

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="home.php">Home</a>
                    
                    <span class="breadcrumb-item active">Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by price</span></h5>
                <div class="bg-light p-4 mb-30">
	
					<form action="" method="post" id="form"  name="form">
					
				
					
					
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="submit"  class="btn btn-danger" value="All Price" id="btnprice" name="btnprice" onchange="showddl();">   
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="submit"  class="btn btn-danger" value="100 to 250" id="btnprice1" name="btnprice1" onchange="showddl();">   
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="submit" class="btn btn-danger" value="300 to 400" id="btnprice2" name="btnprice2" onchange="showddl();">
						</div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="submit" class="btn btn-danger" value="400 to 600" id="btnprice3" name="btnprice3" onchange="showddl();">
						</div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="submit" class="btn btn-danger" value="600 to 800" id="btnprice4" name="btnprice4" onchange="showddl();">
						</div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="submit" class="btn btn-danger" value="800 to 1000" id="btnprice5" name="btnprice5" onchange="showddl();">
						</div>
                    
                </div>
                <!-- Price End -->
                
                

                
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    
                    
                    
    <?php

include('dbcon.php');
  
  
	
	if(isset($_POST['btnprice1']))
		
	{
			$m="100";
			$x="250";
		$mob="%"."acrylic"."%";
		$sql = "SELECT * FROM `tblproduct` WHERE `name` like '$mob' and `price` BETWEEN '$m' and $x";

		$result = mysqli_query($con, $sql);

		$count = 0;
		echo "<div class=\"container\" >";
		echo "<div class=\"row\">";

		while ($line = mysqli_fetch_array($result)) {
			$id = $line['id'];
			$name = $line['name'];
			$photo = $line['photo'];
			$price = $line['price'];
			$q = $line['quantity'];
			$material = $line['material'];

			echo "<div class=\"col-sm-4\" style=\"margin-top:30px;\" >";
			echo "<div class=\"card\" style=\"height:500px;width:300px;\">";
			echo "<div class=\"product-item bg-light\">";
			echo "<div class=\"product-img position-relative overflow-hidden\">";
			echo "<a href=\"acrylicview.php?id=$id\"><img src=\"$photo\" class=\"card-img-top\"  style=\"height:300px;width:298px;border:1px solid red\" alt=\"...\"></a>";
			echo "</div></div>";
			echo "<div class=\"card-body\">";
			echo "<h5 class=\"card-title\">Product Name: $name</h5>";
			echo "<h5>Price: $price/-</h5>";
			echo "<h5>Quantity: $q</h6>";
			echo "<h5>Material: $material</h5>";
			
			echo "<a href=\"cart.php?id=$id\" class=\"btn btn-primary py-2 px-lg-2 d-none d-lg-block\">Add To Cart<i class=\"fa fa-arrow-right ms-3\"></i></a>";
		   
		   echo "</div></div></div>";

			$count = $count + 1;
			
			if ($count % 3 == 0) {
				echo "</div><div class=\"row\">"; 
			}
		}

		echo "</div>";
		echo "</div>";
	}

	else if(isset($_POST['btnprice2']))
		
	{
						
	
	
			$m="251";
			$x="400";
		$mob="%"."acrylic"."%";
		$sql = "SELECT * FROM `tblproduct` WHERE `name` like '$mob' and `price` BETWEEN '$m' and $x";

		$result = mysqli_query($con, $sql);

		$count = 0;
		echo "<div class=\"container\" >";
		echo "<div class=\"row\">";

		while ($line = mysqli_fetch_array($result)) {
			$id = $line['id'];
			$name = $line['name'];
			$photo = $line['photo'];
			$price = $line['price'];
			$q = $line['quantity'];
			$material = $line['material'];

			echo "<div class=\"col-sm-4\" style=\"margin-top:30px;\" >";
			echo "<div class=\"card\" style=\"height:500px;width:300px;\">";
			echo "<div class=\"product-item bg-light\">";
			echo "<div class=\"product-img position-relative overflow-hidden\">";
			echo "<a href=\"acrylicview.php?id=$id\"><img src=\"$photo\" class=\"card-img-top\"  style=\"height:300px;width:298px;border:1px solid red\" alt=\"...\"></a>";
			echo "</div></div>";
			echo "<div class=\"card-body\">";
			echo "<h5 class=\"card-title\">Product Name: $name</h5>";
			echo "<h5>Price: $price/-</h5>";
			echo "<h5>Quantity: $q</h6>";
			echo "<h5>Material: $material</h5>";
			
			echo "<a href=\"acrylicview.php?id=$id\" class=\"btn btn-primary py-2 px-lg-2 d-none d-lg-block\">Add To Cart<i class=\"fa fa-arrow-right ms-3\"></i></a>";
		   
		   echo "</div></div></div>";

			$count = $count + 1;
			
			if ($count % 3 == 0) {
				echo "</div><div class=\"row\">"; 
			}
		}

		echo "</div>";
		echo "</div>";
	}

else if(isset($_POST['btnprice3']))
		
	{
						
	
	
			$m="400";
			$x="600";
		$mob="%"."acrylic"."%";
		$sql = "SELECT * FROM `tblproduct` WHERE `name` like '$mob' and `price` BETWEEN '$m' and $x";

		$result = mysqli_query($con, $sql);

		$count = 0;
		echo "<div class=\"container\" >";
		echo "<div class=\"row\">";

		while ($line = mysqli_fetch_array($result)) {
			$id = $line['id'];
			$name = $line['name'];
			$photo = $line['photo'];
			$price = $line['price'];
			$q = $line['quantity'];
			$material = $line['material'];

			echo "<div class=\"col-sm-4\" style=\"margin-top:30px;\" >";
			echo "<div class=\"card\" style=\"height:500px;width:300px;\">";
			echo "<div class=\"product-item bg-light\">";
			echo "<div class=\"product-img position-relative overflow-hidden\">";
			echo "<a href=\"acrylicview.php?id=$id\"><img src=\"$photo\" class=\"card-img-top\"  style=\"height:300px;width:298px;border:1px solid red\" alt=\"...\"></a>";
			echo "</div></div>";
			echo "<div class=\"card-body\">";
			echo "<h5 class=\"card-title\">Product Name: $name</h5>";
			echo "<h5>Price: $price/-</h5>";
			echo "<h5>Quantity: $q</h6>";
			echo "<h5>Material: $material</h5>";
			
			echo "<a href=\"acrylicview.php?id=$id\" class=\"btn btn-primary py-2 px-lg-2 d-none d-lg-block\">Add To Cart<i class=\"fa fa-arrow-right ms-3\"></i></a>";
		   
		   echo "</div></div></div>";

			$count = $count + 1;
			
			if ($count % 3 == 0) {
				echo "</div><div class=\"row\">"; 
			}
		}

		echo "</div>";
		echo "</div>";
	}

else if(isset($_POST['btnprice4']))
		
	{
						
	
	
			$m="600";
			$x="800";
		$mob="%"."acrylic"."%";
		$sql = "SELECT * FROM `tblproduct` WHERE `name` like '$mob' and `price` BETWEEN '$m' and $x";

		$result = mysqli_query($con, $sql);

		$count = 0;
		echo "<div class=\"container\" >";
		echo "<div class=\"row\">";

		while ($line = mysqli_fetch_array($result)) {
			$id = $line['id'];
			$name = $line['name'];
			$photo = $line['photo'];
			$price = $line['price'];
			$q = $line['quantity'];
			$material = $line['material'];

			echo "<div class=\"col-sm-4\" style=\"margin-top:30px;\" >";
			echo "<div class=\"card\" style=\"height:500px;width:300px;\">";
			echo "<div class=\"product-item bg-light\">";
			echo "<div class=\"product-img position-relative overflow-hidden\">";
			echo "<a href=\"acrylicview.php?id=$id\"><img src=\"$photo\" class=\"card-img-top\"  style=\"height:300px;width:298px;border:1px solid red\" alt=\"...\"></a>";
			echo "</div></div>";
			echo "<div class=\"card-body\">";
			echo "<h5 class=\"card-title\">Product Name: $name</h5>";
			echo "<h5>Price: $price/-</h5>";
			echo "<h5>Quantity: $q</h6>";
			echo "<h5>Material: $material</h5>";
			
			echo "<a href=\"acrylicview.php?id=$id\" class=\"btn btn-primary py-2 px-lg-2 d-none d-lg-block\">Add To Cart<i class=\"fa fa-arrow-right ms-3\"></i></a>";
		   
		   echo "</div></div></div>";

			$count = $count + 1;
			
			if ($count % 3 == 0) {
				echo "</div><div class=\"row\">"; 
			}
		}

		echo "</div>";
		echo "</div>";
	}

else if(isset($_POST['btnprice5']))
		
	{
						
	
	
			$m="800";
			$x="1000";
		$mob="%"."acrylic"."%";
		$sql = "SELECT * FROM `tblproduct` WHERE `name` like '$mob' and `price` BETWEEN '$m' and $x";

		$result = mysqli_query($con, $sql);

		$count = 0;
		echo "<div class=\"container\" >";
		echo "<div class=\"row\">";

		while ($line = mysqli_fetch_array($result)) {
			$id = $line['id'];
			$name = $line['name'];
			$photo = $line['photo'];
			$price = $line['price'];
			$q = $line['quantity'];
			$material = $line['material'];

			echo "<div class=\"col-sm-4\" style=\"margin-top:30px;\" >";
			echo "<div class=\"card\" style=\"height:500px;width:300px;\">";
			echo "<div class=\"product-item bg-light\">";
			echo "<div class=\"product-img position-relative overflow-hidden\">";
			echo "<a href=\"acrylicview.php?id=$id\"><img src=\"$photo\" class=\"card-img-top\"  style=\"height:300px;width:298px;border:1px solid red\" alt=\"...\"></a>";
			echo "</div></div>";
			echo "<div class=\"card-body\">";
			echo "<h5 class=\"card-title\">Product Name: $name</h5>";
			echo "<h5>Price: $price/-</h5>";
			echo "<h5>Quantity: $q</h6>";
			echo "<h5>Material: $material</h5>";
			
			echo "<a href=\"acrylicview.php?id=$id\" class=\"btn btn-primary py-2 px-lg-2 d-none d-lg-block\">Add To Cart<i class=\"fa fa-arrow-right ms-3\"></i></a>";
		   
		   echo "</div></div></div>";

			$count = $count + 1;
			
			if ($count % 3 == 0) {
				echo "</div><div class=\"row\">"; 
			}
		}

		echo "</div>";
		echo "</div>";
	}

else if(isset($_POST['btnprice']))
		
	{
						
	
	
		$mob="%"."acrylic"."%";
		$sql = "SELECT * FROM `tblproduct` WHERE `name` like '$mob'";

		$result = mysqli_query($con, $sql);

		$count = 0;
		echo "<div class=\"container\" >";
		echo "<div class=\"row\">";

		while ($line = mysqli_fetch_array($result)) {
			$id = $line['id'];
			$name = $line['name'];
			$photo = $line['photo'];
			$price = $line['price'];
			$q = $line['quantity'];
			$material = $line['material'];

			echo "<div class=\"col-sm-4\" style=\"margin-top:30px;\" >";
			echo "<div class=\"card\" style=\"height:500px;width:300px;\">";
			echo "<div class=\"product-item bg-light\">";
			echo "<div class=\"product-img position-relative overflow-hidden\">";
			echo "<a href=\"acrylicview.php?id=$id\"><img src=\"$photo\" class=\"card-img-top\"  style=\"height:300px;width:298px;border:1px solid red\" alt=\"...\"></a>";
			echo "</div></div>";
			echo "<div class=\"card-body\">";
			echo "<h5 class=\"card-title\">Product Name: $name</h5>";
			echo "<h5>Price: $price/-</h5>";
			echo "<h5>Quantity: $q</h6>";
			echo "<h5>Material: $material</h5>";
			
			echo "<a href=\"acrylicview.php?id=$id\" class=\"btn btn-primary py-2 px-lg-2 d-none d-lg-block\">Add To Cart<i class=\"fa fa-arrow-right ms-3\"></i></a>";
		   
		   echo "</div></div></div>";

			$count = $count + 1;
			
			if ($count % 3 == 0) {
				echo "</div><div class=\"row\">"; 
			}
		}

		echo "</div>";
		echo "</div>";
	}


	
	
	else

	{
		$m="%"."acrylic"."%";
		$sql = "SELECT * FROM `tblproduct` WHERE `name` like '$m'";

		$result = mysqli_query($con, $sql);

		$count = 0;
		echo "<div class=\"container\" >";
		echo "<div class=\"row\">";

		while ($line = mysqli_fetch_array($result)) {
			$id = $line['id'];
			$name = $line['name'];
			$photo = $line['photo'];
			$price = $line['price'];
			$q = $line['quantity'];
			$material = $line['material'];

			echo "<div class=\"col-sm-4\" style=\"margin-top:30px;\" >";
			echo "<div class=\"card\" style=\"height:auto;width:300px;\">";
			echo "<div class=\"product-item bg-light\">";
			echo "<div class=\"product-img position-relative overflow-hidden\">";
			echo "<a href=\"acrylicview.php?id=$id\"><img src=\"$photo\" class=\"card-img-top\"  style=\"height:300px;width:298px;border:1px solid red\" alt=\"...\"></a>";
			echo "</div></div>";
			echo "<div class=\"card-body\">";
			echo "<h5 class=\"card-title\">Product Name: $name</h5>";
			echo "<h5>Price: $price/-</h5>";
			echo "<h5>Quantity: $q</h6>";
			echo "<h5>Material: $material</h5>";
			
			echo "<a href=\"acrylicview.php?id=$id\" class=\"btn btn-primary py-2 px-lg-2 d-none d-lg-block\">Add To Cart<i class=\"fa fa-arrow-right ms-3\"></i></a>";
		   
		   echo "</div></div></div>";

			$count = $count + 1;
			
			if ($count % 3 == 0) {
				echo "</div><div class=\"row\">"; 
			}
		}

		echo "</div>";
		echo "</div>";
	}

?>




                    
                   
                    
                    
                   
                    </form> 
                   
                    
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->

<?php
include('footer.php');
?>
 