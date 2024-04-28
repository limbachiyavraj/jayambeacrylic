<?php
include('header.php');
?>
<div class="col-md-12">
     <h1>Add Category</h1><br>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
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
	
        <h2 class="text-center">Category</h2>
		<?php
		if(isset($_POST['btnsubmit']))
		{
			$brand=$_POST['brand'];
			$model=$_POST['model'];
			
			if(empty($brand))
			{
				echo "<p style=\"color:red\">Enter your brand</p>";
			}
			
						
			
			else
							{
								
									include('dbcon.php');
									
									$sql="INSERT INTO `tblbrand`(`id`, `brand`, `cdate`) VALUES (NULL, '$brand', '2023-05-01 5:34:32.000000');";
												
												
									if(mysqli_query($con,$sql))
										{
											
											echo "<p style=\"background-color:green;color:white;font-size:22px;\">Your Mobile Brand is added Successful!!!</p>";
													
										}
													
										else
											
											{
																				
												echo "error";
											
											}
										
							}
												
		}
		
		
	?>
        <div class="form-group">
            <input type="text" name="brand" id="brand" class="form-control" placeholder="Insert brand" value="<?php if(isset($_POST['brand'])) echo $_POST['brand']; ?>">
        </div>
		
		
        
        <div class="form-group">
            <button type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-primary btn-block">Submit</button>
        </div>
               
    </form>
    
</div>
</body>
</html>
</div>
<?php
include('footer.php');
?>