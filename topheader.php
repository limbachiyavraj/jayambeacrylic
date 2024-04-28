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
                       
                        <a href="acrylic.php" class="nav-item nav-link">Name Plate</a>
                        <a href="tshirt.php" class="nav-item nav-link">T-shirt</a>
						<a href="mobileskin.php" class="nav-item nav-link">MobileSkin</a>
                        
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="home.php" class="nav-item nav-link active">Home</a>
                            <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                            <a href="manageuser.php" class="nav-item nav-link">My Profile</a>
                           <a href="orderdata.php" class="nav-item nav-link">My Order</a>
                            <a href="logout.php" class="nav-item nav-link">Log Out</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="mycart.php" class="btn px-0 ml-3">
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
<center>
			<?php
						 error_reporting(E_ALL ^ E_WARNING);
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


    