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
                    <span class="breadcrumb-item active">Contact</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contact Us</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success">
					
					<?php
				if(isset($_POST['btnsubmit']))
				{	
					$name=$_POST['name'];
					$email=$_POST['email'];
					$subject=$_POST['subject'];
					$message=$_POST['message'];
					
					if(empty($name))
					{
						echo "<p style=\"color;red\">Please enter your Name</p>";
					}
					
					else if(empty($email))
					{
						echo "<p style=\"color;red\">Please enter your Email</p>";
					}
					
					else if(empty($subject))
					{
						echo "<p style=\"color;red\">Please enter your Subject</p>";
					}
					
					else if(empty($message))
					{
						echo "<p style=\"color;red\">Please enter your Message</p>";
					}
					
					else
					{	
						include('dbcon.php');
						$timezone=new DateTimeZone("Asia/Kolkata");
						$date=new DateTime();
						$date->setTimezone($timezone);
						$d=$date->format('Y-m-d h:i:s');
						
						$sql="INSERT INTO `tblcontactus`(`id`,`name`, `email`,`subject`,`message`,`cdate`) VALUES (NULL, '$name','$email','$subject','$message','$d');";
						
						if(mysqli_query($con,$sql))
						{	
							echo "<h5 style=\"color:green\">Your message is send</h5>";
						}
						
						else
						{
							echo "error";
						}
					}
				}
		
	?>
</div>
                   <form action="" method="POST" id="form" name="form">
                        <div class="control-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"
                                  />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                  />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                  />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" name="message" id="message" placeholder="Message"
                                
                                ></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <input class="btn btn-primary py-2 px-4" type="submit" id="btnsubmit"  name="btnsubmit" value="Send Message" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14765.330393700793!2d73.15122!3d22.3032577!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc988b736fc73%3A0x52c26be36ff50035!2sJay%20Ambe%20Acrylic!5e0!3m2!1sen!2sin!4v1704289653587!5m2!1sen!2sin" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>60, Jawahar Nagar, Saiyed Vasna, Vadodara, Gujarat 390015</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>jayambeacrylic@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+91 95868 78580</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


   <?php
	include('footer.php');
   ?>