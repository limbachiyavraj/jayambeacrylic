<?php

	ob_start(); 
   include('topheader.php');

?>

<script>

function fun1()
{
	var q=txtquantity.value;
	if(txtquantity.value=="")
	{
		q=1;
		txtquantity.value=q;
	}
	else
	{
		q=parseInt(q)+1;
		txtquantity.value=q;
	}
	var p=txtprice.value;
	var t=parseInt(p)*parseInt(q);
	t.value=t;
	t.value=parseInt(txttotal.value);
	
	return false;
	return 0;
	
}
function fun2()
{
	var q=txtquantity.value;
	if(txtquantity.value=="")
	{
		q=1;
		txtquantity.value=q;
	}
	else
	{
		q=parseInt(q)-1;
		txtquantity.value=q;
	}
	if(q<0)
	{
		q=0;
		txtquantity.value=q;
	}
	var p=txtprice.value;
	var tc=parseInt(p)*parseInt(q);
	txttotal.value=total;
	return false;
	
	return 0;
	
}

function fun()
{
	
	var q=txtquantity.value;
	var txttotal=parseInt(p)*parseInt(q);
	txttotal.value=txttotal;
	return false;
}


</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- Cart Start -->
<form id="form1" name="form1" action="" enctype="multipart/form-data" method="POST">
    <div class="container-fluid" >
        <div class="row px-xl-5">
    <div class="col-lg-10 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width:200px;">Products</th>
							<th>Details</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Add to Cart</th>
							
                            
                        </tr>
                    </thead>
					
					<?php
	
  include('dbcon.php');
  
  
	$name=$_SESSION['user'];
  $sql="SELECT * FROM `tblmcart`";
  
  $result=mysqli_query($con,$sql);
  
  
	
  
  
  while($line=mysqli_fetch_array($result))
   {
	   
       $id = $line['id'];
    
   }

  ?>
					
					
                    
					<?php

									include('dbcon.php');
									
									$id = $_REQUEST['id'];
									$sql = "SELECT * FROM `tblproduct` where id='$id'";
									$result = mysqli_query($con, $sql);
									$q=$_GET['q'];

						
									echo "<tr>";
									
									

									while ($line = mysqli_fetch_array($result)) 
									{
										$id = $line['id'];
										$name = $line['name'];
										$photo = $line['photo'];
										$price = $line['price'];
										$t=$price*$q;
										
										$s=60*$q;

										
										
										echo "<td width=\"200px\"><img src=\"$photo\" name=\"photo\" id=\"photo\"  style=\"height:150px;width:150px;border:1px solid red\" alt=\"...\"></td>";

										echo "<td>";
										$a= $_GET['a'];
										$b= $_GET['b'];
										$product ="1)\n$a \n2)\n$b";
										

										
										echo "<label for=\"color\">Product Details</label>";
										echo "<textarea id=\"product\" name=\"product\" style=\"height: 100px; width: 100px;\" class=\"form-control form-control-sm border-0 text-center\" value=\"\">$product</textarea>";

									
										echo "</td>";
										echo "<td><input type=\"text\" id=\"txtprice\" name=\"txtprice\" style=\"height:31px\" class=\"form-control form-control-sm bg-secondary border-0 text-center\" value=\"$price\">
													</td>";
										
										echo "<td style=\"text-align:left;\" class=\"align-left\">
													
													<div class=\"input-group quantity mx-auto\"  style=\"width: 100px;\">
														
														<div class=\"input-group-btn\" >
															
															<input type=\"submit\"  onclick=\"return fun2();\" class=\"btn btn-sm btn-primary btn-minus\" style=\"height:31px\"  value=\"-\" />
														
														</div>
													
													<input type=\"text\" id=\"txtquantity\" name=\"txtquantity\" style=\"height:31px\" class=\"form-control form-control-sm bg-secondary border-0 text-center\" value=\"$q\">
														
														<div class=\"input-group-btn\">

															<input type=\"submit\"  onclick=\"return fun1();\" class=\"btn btn-sm btn-primary btn-minus\" style=\"height:31px\"  value=\"+\" />	</div>
													</div>
												
												</td>";
										
													
										echo"<td><button  id=\"btnmcart\" name=\"btnmcart\"  class=\"btn btn-block btn-primary font-weight-bold my-3 py-3\"  type=\"submit\">View Order</button></center>";		
										
										echo "<td>	<input type=\"hidden\"  id=\"txttotal\" name=\"txttotal\"  style=\"height:31px;width:140px\" class=\"form-control form-control-sm bg-secondary border-0 text-center\" value=\"$t\">
													</td>";
										
										
										echo "<td><img src=\"\" /></td>";
									
									}
									
									
									echo "</tr>";
									echo "</table>";
									
						?>
						
    						

                
                
    </div>
	
            <div class="col-lg-4">
                    <?php
					if(isset($_POST['btnmcart']))
					{
						$id=$_GET['id'];
						
						$product=$_POST['product'];
						$price=$_POST['txtprice'];
						$name=$_SESSION['user'];
						$q=$_POST['txtquantity'];
						$t=$_POST['total'];		
						
							
							
							
							if(empty($name))
								{
									echo "<p style=\"color:red\">username is missing</p>";
								}
					
							else if(empty($price))
							{
								echo "<p style=\"color:red\">price is missing</p>";
							}

							
							else if(empty($product))
							{
								echo "<p style=\"color:red\">product is missing</p>";
							}
							
							else if(empty($q))
								{
									echo "<p style=\"color:red\">Please select quantity</p>";
								}
								
							
												
							
							
								
						
								
							else
							{
								
									include('dbcon.php');
									
										$timezone=new DateTimeZone("Asia/Kolkata");
										$date=new DateTime();
										$date->setTimezone($timezone);
										$d=$date->format('Y-m-d h:i:s');
										
										
										
									  
									
									$sql="INSERT INTO `tblmcart`(`id`,`productid`,`product`,`username`,`price`,`quantity`,`total`,`status`,`cdate`) VALUES (NULL, '$id','$product','$name','$price','$q','$t',1,'$d');";
												
												
									if(mysqli_query($con,$sql))
										{
											
											echo "<p style=\"color:green;font-size:22px;\">Your Product is added to Cart </p>";
											header("Location: mycart.php");
													
										}
													
										else
											
											{
																				
												echo "error";
											
											}
										
							}
												
					}
	?>		
	
	 				   <?php
						if(isset($_POST['btnsubmit']))
						{
							$id=$_GET['id'];
							$a = $_POST['a'];
							$b= $_POST['b'];
							$q2 =$_POST['txtq'];
							header("Location:mycart.php?id=$id&q=$q2&a=$a&b=$b");
						
						}
						?>
					
                    </div>
                </div>
            </div>
        </div>
    </div>
</form> 
 <!-- Cart End -->

	
<?php
 
 include('footer.php');
	
?>
