
<?php
ob_start(); 
 include('header.php');
	
?>

<div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Acrylic Products</span></h2>
        <div class="row px-xl-5">
            <div class="col">
			
                <div class="owl-carousel related-carousel">
                    <?php
	
							include('dbcon.php');
							$m="%"."acrylic"."%";
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
								$pname=$line['name'];
								 
								echo "<div class=\"product-item bg-light\">";
								echo "<div class=\"product-img position-relative overflow-hidden\">";
						echo "<a href=\"acrylicview.php?id=$id\"><img class=\"img-fluid w-100\" src=\"$photo\" style=\"height:300px;width:298px;\" alt=\"\"></a>";
                            
                        echo "</div>";
                        echo "<div class=\"text-center py-4\">";
                            echo "<a class=\"h6 text-decoration-none text-truncate\" href=\"\">$pname</a>";
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

	<div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">T-shirt</span></h2>
        <div class="row px-xl-5">
            <div class="col">
			
                <div class="owl-carousel related-carousel">
                    <?php
	
							include('dbcon.php');
							$m="%"."tshirt"."%";
							
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
								$pname=$line['name'];
								 
								echo "<div class=\"product-item bg-light\">";
								echo "<div class=\"product-img position-relative overflow-hidden\">";
						echo "<a href=\"tshirtview.php?id=$id\"><img class=\"img-fluid w-100\" src=\"$photo\" style=\"height:300px;width:298px;\" alt=\"\"></a>";
                            
                        echo "</div>";
                        echo "<div class=\"text-center py-4\">";
                            echo "<a class=\"h6 text-decoration-none text-truncate\" href=\"\">$pname</a>";
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
	
		<div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Mobileskin</span></h2>
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
								$pname=$line['name'];
								 
								echo "<div class=\"product-item bg-light\">";
								echo "<div class=\"product-img position-relative overflow-hidden\">";
						echo "<a href=\"mobileview.php?id=$id\"><img class=\"img-fluid w-100\" src=\"$photo\" style=\"height:300px;width:298px;\" alt=\"\"></a>";
                            
                        echo "</div>";
                        echo "<div class=\"text-center py-4\">";
                            echo "<a class=\"h6 text-decoration-none text-truncate\" href=\"\">$pname</a>";
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
    



<?php
 
 include('footer.php');
	
?>