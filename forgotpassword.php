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
	
    <form action="" method="POST" id="form" name="form">
		<center><h2>Forgot Password</h2><center>
		<?php
					if(isset($_POST['btnsubmit']))
					{
						$fname=$_POST['firstname'];
						$lname=$_POST['lastname'];
						$username=$_POST['username'];
						$mobile=$_POST['mobile'];
						
							
							if(empty($fname))
								{
									echo "<p style=\"color:red\">Please Enter your FirstName</p>";
								}
												
							else if(empty($lname))
								
								{
									echo "<p style=\"color:red\">Please Enter your LastName</p>";
								}
												
							else if(empty($username))
												
								{
									echo "<p style=\"color:red\">Please Enter your Username</p>";
								}
								
							
							else if(empty($mobile))
												
								{
									echo "<p style=\"color:red\">Please Enter your Mobile No</p>";
								}
							
								
							else
							{
								
									include('dbcon.php');
							
									$sql="SELECT `password` FROM `tblbuyer` where `firstname`='$fname' and `lastname`='$lname' and `username`='$username' and `mobileno`='$mobile' ";
									
									$result=mysqli_query($con,$sql);
									if(mysqli_num_rows($result)==1)
									{
										echo "<table class=\"table table-striped  \">";
									
										while($line=mysqli_fetch_array($result))
										{
											echo "<tr>";
											echo "<td>";
											echo "Your password:-";
											echo $line['password'];
											echo "</td>";
											echo "</tr>";
										}

											echo "</table>";
									}
									else
									{
										print("No Data Found");
									}										
							}
							}
												
					
	?>
		
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text"  name="firstname" id="firstname" class="form-control"  placeholder="First Name" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>" ></div>
				
				<div class="col"><input type="text" name="lastname" id="lastname"  class="form-control"  placeholder="Last Name" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>"></div>
			</div>        	
        </div>
        
		 <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php if(isset($_POST['user'])) echo $_POST['user']; ?>"></div>
								
				<div class="col"><input type="number"  name="mobile" id="mobile" class="form-control"  placeholder="Mobile.No" value="<?php if(isset($_POST['mobile'])) echo $_POST['mobile']; ?>" ></div>
				
				
			</div>        	
        </div>
		
		
			
			<div style="visibility:hidden; color:red" id="agree_chk_error">
			
			Can't proceed as you didn't agree to the terms!
			
			</div>
		
		<div class="form-group">
            <input type="submit"  id="btnsubmit" name="btnsubmit"  class="btn btn-success btn-lg btn-block"></button>
        </div>
		
		
               
    </form>
    
</div>
</body>
</html>

</div>

