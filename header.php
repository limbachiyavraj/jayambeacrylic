<?
ob_start();

?>


 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jay Ambe Acrylic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/jayambeacrylic.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
	
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                
				<div class="sidebar-brand-icon mt-2">
                    <img src="jayambelogo.png" height="70px" width="70px">
                </div>
                
            </a>

                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                
                   <div>
						Mobile:-<a href="tel:+919586878580" style="color:red">9586878580</a><br>
				</div>
				<div>
						Gmail:-<a href="mailto:jayambeacrylic@gmail.com" style="color:green">jayambeacrylic@gmail.com</a>

                </div>  
                    
				
                    
                </div>
                
            </div>
        </div>
			
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
		
            <div class="col-lg-3 d-none d-lg-block">
			
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="acrylic.php" class="nav-item nav-link">Name Plate</a>
                        <a href="tshirt.php" class="nav-item nav-link">T-shirt</a>
                        
                        <a href="mobileskin.php" class="nav-item nav-link">MobileSkin</a>
                        
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
			
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                   
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="home.php" class="nav-item nav-link active">Home</a>
                            <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                            <a href="profile.php" class="nav-item nav-link">My Profile</a>
							<a href="orderdata.php" class="nav-item nav-link">My Order</a>
                            <a href="logout.php" class="nav-item nav-link">Log Out</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="mycart.php" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="mycart.php" class="btn px-0 ml-3" >
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">

								<?php								

									  include('dbcon.php');
									  session_start();
									  
										$name=$_SESSION['user'];
									  
									  $sql="SELECT * FROM `tblmcart` where `username`='$name' and `status`=1";
									  
									  $result=mysqli_query($con,$sql);
									  
									  $count=mysqli_num_rows($result);
									  
									  echo "$count";
	
								?>
								
								</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      	
						<?php
	
							include('dbcon.php');
							$t="%"."tshirt"."%";
							$sql = "SELECT * FROM `tblproduct` WHERE `name` like '$t'";
							$result=mysqli_query($con,$sql);
							$count=0;
							while($line=mysqli_fetch_array($result))
							{
								if($count>=5)
								{
									break;
								}
								$count=$count+1;
									
								$photo=$line['photo'];
									
								$id=$line['id'];
									
									
									
									echo "$id";
							if($count==1)
							{
								echo "<div class=\"carousel-item position-relative active\" style=\"height: 430px;\">";
								
							}
							else
							{
								echo "<div class=\"carousel-item position-relative\" style=\"height: 430px;\">";
								
							}
								echo "<img class=\"position-absolute w-100 h-100\" src=\"$photo\" style=\"object-fit: cover;\">";
								echo "<div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">";
								echo "<div class=\"p-3\" style=\"max-width: 700px;\">";
								
								echo "<a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"tshirtview.php?id=$id\">Shop Now</a>";
								echo "</div>";
								echo "</div>";
								echo "</div>";
							}
						
						?>
    
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/mobile2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Best Seller </h3>
                        <a href="mobileskin.php" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/tshirt3.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Best Seller</h3>
                        <a href="tshirt.php" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
	<center>
			<?php
						
						$name=$_SESSION['user'];
						if(!empty($name))
						{
						echo "<h2 style=\"color:green;font-family:bankgothic;\">Welcome,$name</h2>";
						}
						else
						{
							header("Location:login.php");
						}
			?>
</center>
<center>
	
	<div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="acrylic.php">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/acrylic.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h4>NamePlate</h4>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="tshirt.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/tshirt.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h4>T-shirt</h4>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="mobileskin.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/mobileskin.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-1">
                            <h4>MobileSkin</h4>
                            <small class="text-body">100 Products</small>
                        </div>
                    </div>
                </a>
            </div>
            
        </center>    
    <!-- Categories End -->
