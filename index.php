<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> Login Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
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
	
    <form action="" method="post" id="form" name="form">
	
	
        <h2 class="text-center">Log In</h2>
		<?php
		if(isset($_POST['btnsubmit']))
		{
			$text=$_POST['txtun'];
			$password=$_POST['txtps'];
			if(empty($text))
			{
				echo "<p style=\"color:red\">Please Enter your Username</p>";
			}
			else if(empty($password))
			{
				echo "<p style=\"color:red\">Please Enter your Password</p>";
			}
			else
			{
				
				include('dbcon.php');
				$sql="select * from tblbuyer where username='$text' and password='$password' ";
				$result=mysqli_query($con,$sql);
				
				$count = mysqli_num_rows($result);
				if($count==1)
				{
					session_start();
					$_SESSION['user']=$text;
					header("Location: home.php");
				}
				else
				{
					echo "<div style = \"color:red\">Invalid Username/Password</div>";
				}
				mysqli_close($con);
			}
		}
	?>
        <div class="form-group">
            <input type="text" name="txtun" id="txtun" class="form-control" placeholder="Username" value="<?php if(isset($_POST['txtun'])) echo $_POST['txtun']; ?>">
        </div>
        <div class="form-group">
            <input type="password" name="txtps" id="txtps" class="form-control" placeholder="Password" value="<?php if(isset($_POST['txtps'])) echo $_POST['txtps']; ?>">
        </div>	
        <div class="form-group">
            <button type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="forgotpassword.php" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="register.php">Create an Account</a></p>
</div>
</body>
</html>