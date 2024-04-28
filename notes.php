
<div class="col-md-12">
     
	 <h1>Registration Page</h1><br>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>User Registration</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 380px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>




</head>

<body>
<div class="login-form">
	
    <form action="" method="post" id="form" enctype="multipart/form-data" name="form">
	
        <center><h2>Register</h2><center>
		<?php
					if(isset($_POST['btnsubmit']))
					{
						$fname=$_POST['firstname'];
						$mname=$_POST['middlename'];
						$lname=$_POST['lastname'];
						$mobile=$_POST['mobile'];
						$email=$_POST['email'];
						$city=$_POST['city'];
						$pincode=$_POST['pincode'];
						$address=$_POST['address'];
						$birth=$_POST['birthdate'];
						$gender=$_POST['gender'];
						$username=$_POST['username'];
						$password=$_POST['password'];
						$Rpassword=$_POST['confirmpassword'];
							
							if(empty($fname))
								{
									echo "<p style=\"color:red\">Please Enter your FistName</p>";
								}
								
							elseif(empty($mname))
								
								{
									echo "<p style=\"color:red\">Please Enter your MiddleName</p>";
								}
												
							elseif(empty($lname))
								
								{
									echo "<p style=\"color:red\">Please Enter your LastName</p>";
								}
								
							elseif(empty($mobile))
								
								{
									echo "<p style=\"color:red\">Please Enter your Mobile No.</p>";
								}
												
							else if(empty($email))
												
								{
									echo "<p style=\"color:red\">Please Enter your Email</p>";
								}
							
							
								
							else if(empty($city))
												
								{
									echo "<p style=\"color:red\">Please Enter your City</p>";
								}
							else if(empty($pincode))
												
								{
									echo "<p style=\"color:red\">Please Enter your Pincode</p>";
								}
							else if(empty($address))
												
								{
									echo "<p style=\"color:red\">Please Enter your Address</p>";
								}
							else if(empty($birth))
												
								{
									echo "<p style=\"color:red\">Please Enter your BirthDate</p>";
								}
								
							else if(empty($gender))
												
								{
									echo "<p style=\"color:red\">Please Select your Gender</p>";
								}
							
							else if(empty($username))
											
								{
									echo "<p style=\"color:red\">Please Enter your Username</p>";
								}
												
							else if(empty($password))
											
								{
									echo "<p style=\"color:red\">Please Enter your Password</p>";
								}
												
							else if(empty($Rpassword))
												
								{
										echo "<p style=\"color:red\">Please Repeat your Password</p>";
												
								}
								
							else if($password!=$Rpassword)
												
								{
										echo "<p style=\"color:red\">Password Does not Match</p>";
												
								}
								
							else
							{
								
									include('dbcon.php');
									
										$timezone=new DateTimeZone("Asia/Kolkata");
										$date=new DateTime();
										$date->setTimezone($timezone);
										$d=$date->format('Y-m-d h:i:s');
										
										$i="../image/".$_FILES['file']['name'];
									  
									  if(file_exists($i)){

										echo $_FILES['file']['name']."<p style=\"background-color:#F8D7DA; color:#842029; width:1200px; height:50px; line-height:40px;\">File is already Exists</p>";
									  }
									  else
									  {
										move_uploaded_file($_FILES['file']['tmp_name'], "../image/".$_FILES['file']['name']);
									  }
									
									$sql="INSERT INTO `tblbuyer`(`id`,`firstname`, `middlename`,`lastname`,`mobileno`,`email`,`photo`,`city`,`pincode`,`address`,`birth`,`gender`,`username`,`password`,`status`,`cdate`) VALUES (NULL, '$fname', '$mname','$lname','$mobile','$email','$i','$city','$pincode','$address','$birth','$gender','$username','$password',1,'$d');";
												
												
									if(mysqli_query($con,$sql))
										{
											
											echo "<p style=\"background-color:green;color:white;font-size:22px;\">Your registration is successful!!!</p>";
													
										}
													
										else
											
											{
																				
												echo "error";
											
											}
										
							}
												
					}
	?>
		
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text"  name="firstname" id="firstname" class="form-control"  placeholder="First Name" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>" ></div>
				
				<div class="col"><input type="text" name="middlename" id="middlename"  class="form-control"  placeholder="Middle Name" value="<?php if(isset($_POST['middlename'])) echo $_POST['middlename']; ?>"></div>
			</div>        	
        </div>
		 <div class="form-group">
			<div class="row">
				<div class="col"><input type="text"  name="lastname" id="lastname" class="form-control"  placeholder="Last Name" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>" ></div>
				
				<div class="col"><input type="number" name="mobile" id="mobile"  class="form-control"  placeholder="Mobile No" value="<?php if(isset($_POST['mobile'])) echo $_POST['mobile']; ?>"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
        </div>
		
		<div class="form-group">
			<div class="row">
				
				<label for="formFileMultiple" class="form-label" style="color:Green">Upload your Photo</label>
  
				<input class="form-control" type="file" id="file" name="file" multiple>
			</div>        	
        </div>
		 <div class="form-group">
			<div class="row">
				<div class="col"><input type="text"  name="city" id="city" class="form-control"  placeholder="City Name" value="<?php if(isset($_POST['city'])) echo $_POST['city']; ?>" ></div>
				
				<div class="col"><input type="number" name="pincode" id="pincode"  class="form-control"  placeholder="Pincode" value="<?php if(isset($_POST['pincode'])) echo $_POST['pincode']; ?>"></div>
			</div>        	
        </div>
		<div class="form-group">
            <textarea class="form-control" name="address" id="address" rows="2" placeholder="Address" value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>"></textarea>
        </div>
		<div class="form-group">
			<input type="date"  name="birthdate" id="birthdate" class="form-control"  placeholder="BirthDate" value="<?php if(isset($_POST['birthdate'])) echo $_POST['birthdate']; ?>" >
		</div>
		
		<div class="form-group">		
			
			
				
				<select name="gender" id="gender" class="form-control"  placeholder="Gender"  value="<?php if(isset($_POST['gender'])) echo $_POST['gender']; ?>" >
						<option value="">Gender</option>
								
						<option value="Male">Male</option>
						<option value="Female">Female</option>
								
				</select>
				
		</div>
		<div class="form-group">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password"  value="<?php if(isset($_POST['confirmpassword'])) echo $_POST['confirmpassword']; ?>">
        </div>        
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" name="agree" id="agree"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
			
			<div style="visibility:hidden; color:red" id="agree_chk_error">
			
			Can't proceed as you didn't agree to the terms!
			
			</div>
        <div class="form-group">
            <input type="submit"  id="btnsubmit" name="btnsubmit"  class="btn btn-success btn-lg btn-block"></button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="forgotpass.php" class="float-right"></a>
        </div>        
    </form>
    <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
</div>
</body>
</html>
</div>

