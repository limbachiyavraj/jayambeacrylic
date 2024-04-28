<?php
 
 ob_start();
 session_start();
	
?>
	<div class="col-md-12">
     
	<center><h1>Profile Details</h1><br></center>
  <form action="" method="post" id="form" enctype="multipart/form-data" name="form">
  
  <?php
		
		 if(isset($_POST['btsubmit2']))
		 {
			 $path="../image/".$_FILES['file']['name'];						
									if(file_exists("../image/".$_FILES['file']['name']))
									 {
										echo "<p style=\"color:red; text-align:center; font-weight:bold\">File Name Already Exists. Please Rename the File and Try Again.</p>";
									 }
									else
									 { 
										$allowed =  array('gif','png','jpg','jpeg','JPG','PNG','GIF','JPEG');
										$filename = $_FILES['file']['name'];
										$ext = pathinfo($filename, PATHINFO_EXTENSION);
										if(!in_array($ext,$allowed))
										{
											 echo "<p style=\"color:red; text-align:center; font-weight:bold\">Not Compatible Format. Please upload only image file.</p>";
										}
										else
										{
										 move_uploaded_file($_FILES['file']['tmp_name'],"../image/".$_FILES['file']['name']);
									    }
		                            }
   
               
	
		include('dbcon.php');
        
		$name=$_SESSION['user'];
        $sql="UPDATE `tblbuyer` SET `photo`='$path'  WHERE `username` = '$name' ;";
                if(mysqli_query($con,$sql))
                                {
                                    echo "<h4 style=\"color:green\">Record Updated successfully!</h4>";
									header("location: profile.php");
                                   
                                }
                else
                                {
                                echo "<h4 style=\"color:red\">Error !</h4>";
                                }
            }
			
			
	
	
		include('dbcon.php');
		
		$name=$_SESSION['user'];
		$sql="SELECT * FROM `tblbuyer` where username='$name' ";
		$result=mysqli_query($con,$sql);
        
		echo "<table class=\"table table-hover table-striped\"> ";
		
		while($line=mysqli_fetch_array($result))
			
			{
				$i= $line['photo'];
				echo "<img src=\"$i\" style=\"height:100px;width:100px;border-radius:100px;\" />";
			}
		
		echo "<input type=\"file\" id=\"file\" name=\"file\" value=\"\" />";
		echo "<input type=\"submit\" id=\"btsubmit2\" name=\"btsubmit2\" value=\"Update photo\" />";
	
	?>	
  
  
  <?php
  
	
 if(isset($_POST['btsubmit'])){
						$id=$_POST['id'];
						$fname=$_POST['firstname'];
						$lname=$_POST['lastname'];
						$mobile=$_POST['mobile'];
						$email=$_POST['email'];
						$username=$_POST['username'];
						
		
						
           
            if(empty($fname))
								{
									echo "<p style=\"color:red\">Please Enter your FistName</p>";
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
							
							else if(empty($username))
											
								{
									echo "<p style=\"color:red\">Please Enter your Username</p>";
								}
												
							
												
							
            else
		    
			{   
		       
	
		include('dbcon.php');
		
		session_start();
	
		$name=$_SESSION['user'];
        
        $sql="UPDATE `tblbuyer` SET  `firstname` = '$fname', `lastname` = '$lname', `mobileno` = '$mobile', `email` = '$email',`username` = '$username' WHERE username='$name';";
                if(mysqli_query($con,$sql))
                                {
                                    echo "<h4 style=\"color:green\">Record Updated successfully!</h4>";
									header("Location: profile.php");
                                }
                else
                                {
                                echo "<h4 style=\"color:red\">Error !</h4>";
                                }
            }
        }
      ?>
      <table class="table table-striped table-success" >
	 
	 <?php
	
	
		include('dbcon.php');
		
		
	
		$name=$_SESSION['user'];
        
		$sql="SELECT * FROM `tblbuyer` where username='$name'";
		$result=mysqli_query($con,$sql);
        
		echo "<table class=\"table table-hover table-striped\">";
		
		while($line=mysqli_fetch_array($result))
			{
				
				
				$fname=$line['firstname'];
				$lname=$line['lastname'];
				$mobile=$line['mobileno'];
				$email=$line['email'];
				$username=$line['username'];
				
                
                echo "<tr><td>Firstname</td>
                <td><input type=\"text\" id=\"firstname\" name=\"firstname\" value=\"$fname\" /></td>
                </tr>";
				
				echo "<tr><td>lastname</td>
                <td><input type=\"text\" id=\"lastname\" name=\"lastname\" value=\"$lname\" /></td>
                </tr>";
				echo "<tr><td>mobile</td>
                <td><input type=\"text\" id=\"mobile\" name=\"mobile\" value=\"$mobile\" /></td>
                </tr>";
				echo "<tr><td>email</td>
                <td><input type=\"text\" id=\"email\" name=\"email\" value=\"$email\" /></td>
                </tr>";
				 
				
				
				echo "<tr><td>username</td>
                <td><input type=\"text\" id=\"username\" name=\"username\" value=\"$username\" /></td>
                </tr>";
                echo "<tr>
                <td></td>
                <td><input type=\"submit\" id=\"btsubmit\" name=\"btsubmit\" value=\"Update\" /></td>
                </tr>";
                
			}

        				echo "</table>";
                    
        
		
		?>
    
 </form> 
  </div>
  
 <?php
 include('footer.php');
?>
