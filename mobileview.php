<?php
ob_start();
include('topheader.php');
?>
<script>
function showddl()
{
	document.form.submit();
	return false;
}
</script>
                   
 <form action="" method="POST" id="form" enctype="multipart/form-data" name="form">
	 <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
					<?php
									include('dbcon.php');
									$id=$_GET['id'];
									$sql = "SELECT * FROM `tblproduct` where id='$id'";
									$result = mysqli_query($con, $sql);

									$count = 0;
									echo "<tr>";

									while ($line = mysqli_fetch_array($result)) 
									{
										echo "<table class=\"table table-hover table-striped\">";
										$id = $line['id'];
										$name = $line['name'];
										$photo = $line['photo'];
										$price = $line['price'];
										$q = $line['quantity'];
										
										echo "<td width=\"220px\"><img src=\"$photo\"  style=\"height:500px;width:450px;border:1px solid red\" alt=\"...\"></td>";
										
										
									}

									echo "</tr>";
									echo "</table>";									
						?>
                    </div>

                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                
				<div class="h-100 bg-light p-30">
                  
				  <?php echo"<div><h3   style=\"color:#0C2D57\">Product Name:-</h3><h4>$name</h4>"; ?>
                    
                    <h3 class="font-weight-semi-bold mb-4"><?php echo "<div><h3  style=\"color:#0C2D57\">Price:-</h3><h4>$price/-</h4>";?>                    
					<div class="col-sm-4 mb-3">
                
				<p class="mb-0"></p>
             
			 
              <label><h5>Brand</h5></label>
				
						<select id="a" name="a" onchange="showddl();">
				
				<option>---select brandname---</option>
    <?php
    include('dbcon.php'); 

   error_reporting(E_ALL ^ E_WARNING); 

    $sql = "SELECT * FROM `tblbrand` ";
    $result = mysqli_query($con, $sql);

    while ($line = mysqli_fetch_array($result)) {
        $id = $line['id'];
		
        $a = $line['brand'];
    
        
		?>
		<option value="<?php echo $id; ?>" <?php if($line['id']==$_REQUEST['a']) echo "Selected"; ?>><?php echo $a; ?></option>";
		<?php
    }
    ?>
</select>


	<label><h5>Model</h5></label>
	<select id="b" name="b">
		<option>---select modelname---</option>
    <?php
    include('dbcon.php');

    $id = $_REQUEST['a']; 
	
    $sql = "SELECT * FROM `tblmodel` where `brand`='$id'";
    $result = mysqli_query($con, $sql);

    while ($line = mysqli_fetch_array($result)) {
        $id = $line['id'];
        $b = $line['model'];
		echo "<option value='$b'>$b</option>";
    }
    ?>
</select>

              </div>

   			   <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" id= "txtq" name="txtq" class="form-control bg-secondary border-0 text-center" value="<?php if(isset($_POST['txtq'])) echo $_POST['txtq']; else echo 1; ?>">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
					
                        
						
						<?php
						if(isset($_POST['btnsubmit']))
						{
								$id=$_GET['id'];
								$a = $_POST['a'];
								$sql = "SELECT * FROM `tblbrand` where `id`='$a'";
								$result = mysqli_query($con, $sql);
								while ($line = mysqli_fetch_array($result)) {
									$a = $line['brand'];
								}
								$b = $_POST['b'];
								$q2 =$_POST['txtq'];
							
							header("Location:mcart.php?id=$id&q=$q2&a=$a&b=$b");
						}
						?>
						<input type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-primary px-3" value=" Add To Cart" />
					
                    </div>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
                        
                    </div>
                
    <!-- Shop Detail End -->
	<div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">You May Also Like</span></h2>
        <div class="row px-xl-5">
            <div class="col">
			
                <div class="owl-carousel related-carousel">
                    <?php
	
							include('dbcon.php');
							$m="%"."mobile"."%";
							
							$sql = "SELECT * FROM `tblproduct` WHERE `name` like '$m'";
							
							$result=mysqli_query($con,$sql);
							$count=0;
							while($line=mysqli_fetch_array($result))
							{
								$id = $line['id'];
								if($count>=5)
								{
									break;
								}
								$count=$count+1;
								$photo=$line['photo'];
								$p=$line['price'];
								 
								echo "<div class=\"product-item bg-light\">";
								echo "<div class=\"product-img position-relative overflow-hidden\">";
						echo "<a href=\"mobileview.php?id=$id\"><img class=\"img-fluid w-100\" src=\"$photo\" style=\"height:300px;width:298px;\" alt=\"\"></a>";
                            
                        echo "</div>";
                        echo "<div class=\"text-center py-4\">";
                            echo "<a class=\"h6 text-decoration-none text-truncate\" href=\"\">$name</a>";
                            echo "<div class=\"d-flex align-items-center justify-content-center mt-2\">";
                                echo "<h5>$p</h5>";
                            echo "</div>";
                            echo "<div class=\"d-flex align-items-center justify-content-center mb-1\">";
                                echo "<small class=\"fa fa-star text-primary mr-1\"></small>";
                                echo "<small class=\"fa fa-star text-primary mr-1\"></small>";
                                echo "<small class=\"fa fa-star text-primary mr-1\"></small>";
                                echo "<small class=\"fa fa-star text-primary mr-1\"></small>";
                                echo "<small class=\"fa fa-star text-primary mr-1\"></small>";
                                echo "<small>(99)</small>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
									
									
							}
						
						?>
					
                </div>
            </div>
			
			
        </div>
    </div>

    
</form>


<?php
include('footer.php');
?>