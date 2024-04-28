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
	txttotal.value=t;
	txtsubtotal.value=t;
	txtship.value=60*q;
	total.value=parseInt(txttotal.value)+parseInt(txtship.value);
	var totalAmount = total.value;
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
	var t=parseInt(p)*parseInt(q);
	txttotal.value=t;
	txtsubtotal.value=t;
	txtship.value=60*q;
	total.value=parseInt(txttotal.value)+parseInt(txtship.value);
	return false;
	
	return 0;
	
}

function fun()
{
	
	var q=txtquantity.value;
	var p=txtprice.value;
	var t=parseInt(p)*parseInt(q);
	txttotal.value=t;
	return false;
}



</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- Cart Start -->
<form id="form1" name="form1" action="" method="POST">
    <div class="container-fluid" >
        <div class="row px-xl-5">
    <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width:200px;">Products</th>
							<th>Details</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            
                        </tr>
                    </thead>
					
					
                    
					<?php

									include('dbcon.php');
									$id=$_GET['id'];
									$sql = "SELECT * FROM `tblproduct` where id='$id'";
									$result = mysqli_query($con, $sql);
									$q=$_GET['q'];

									$count = 0;
									echo "<tr>";

									while ($line = mysqli_fetch_array($result)) 
									{
										$id = $line['id'];
										$name = $line['name'];
										$photo = $line['photo'];
										$price = $line['price'];
										$t=$price*$q;
										
										$s=60*$q;


										
										echo "<td width=\"200px\"><img src=\"$photo\"  style=\"height:150px;width:150px;border:1px solid red\" alt=\"...\"></td>";

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
										
										echo "<td>	<input type=\"text\"  id=\"txttotal\" name=\"txttotal\"  style=\"height:31px;width:140px\" class=\"form-control form-control-sm bg-secondary border-0 text-center\" value=\"$t\">
													</td>";
										
										
										echo "<td><img src=\"\" /></td>";
									
									}

									echo "</tr>";
									echo "</table>";
									
						?>
						
    						
<div class="col-md-12">
    
    <?php
	
		include('dbcon.php');
		
		$username=$_SESSION['user'];
        $sql="SELECT * FROM `tblbuyer` where `username`='$username'";
		$result=mysqli_query($con,$sql);
        
		echo "<table class=\"table table-hover table-striped\">";
		
		while($line=mysqli_fetch_array($result))
			{
				
				$mobile=$line['mobileno'];
				$city=$line['city'];
				$pincode=$line['pincode'];
				$address=$line['address'];
				
				
                echo "<tr><td>mobile</td>
                <td><input type=\"text\" id=\"mobile\" name=\"mobile\" value=\"$mobile\" /></td>
                </tr>";
				echo "<tr><td>address</td>
                <td><input type=\"text\" id=\"address\" name=\"address\" value=\"$address\" /></td>
                </tr>";
				
				echo "<tr><td>city</td>
                <td><input type=\"text\" id=\"city\" name=\"city\" value=\"$city\" /></td>
                </tr>";
				echo "<tr><td>pincode</td>
                <td><input type=\"text\" id=\"pincode\" name=\"pincode\" value=\"$pincode\" /></td>
                </tr>";
				
			}

        				echo "</table>";
                    
        
		
		?>
        
		
		</div>
                
                
    </div>
	
            <div class="col-lg-4">
                    <?php
					if(isset($_POST['btnorder']))
					{
						$product=$_POST['product'];
						$price=$_POST['txtprice'];
						$q=$_POST['txtquantity'];
						$ans=$_POST['total'];		
						$mobile=$_POST['mobile'];
						$city=$_POST['city'];
						$pincode=$_POST['pincode'];
						$address=$_POST['address'];
							
							if(empty($mobile))
								{
									echo "<p style=\"color:red\">Please Enter your mobileno</p>";
								}
								
							elseif(empty($city))
								
								{
									echo "<p style=\"color:red\">Please Enter your city</p>";
								}
												
							elseif(empty($pincode))
								
								{
									echo "<p style=\"color:red\">Please Enter your pincode</p>";
								}
								
							elseif(empty($address))
								
								{
									echo "<p style=\"color:red\">Please Enter your address</p>";
								}
												
							
							
								
						
								
							else
							{
								
									include('dbcon.php');
									
										$timezone=new DateTimeZone("Asia/Kolkata");
										$date=new DateTime();
										$date->setTimezone($timezone);
										$d=$date->format('Y-m-d h:i:s');
										$i="../image/".$_FILES['file']['name'];
									  
									
									$sql="INSERT INTO `tblorder`(`id`, `proname`,`quantity`,`tprice`,`mobile`,`address`,`city`,`pincode`,`cdate`) VALUES (NULL, '$product', '$q','$ans','$mobile','$address','$city','$pincode','$d');";
												
												
									if(mysqli_query($con,$sql))
										{
											
											echo "<p style=\"color:green;font-size:22px;\">Your Order is Placed </p>";
													
										}
													
										else
											
											{
																				
												echo "error";
											
											}
										
							}
												
					}
	?>		

                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <?php
								echo"<h3><input type=\"text\"  id=\"txtsubtotal\" name=\"txtsubtotal\"  style=\"height:31px;width:140px \" class=\"form-control form-control-sm border-0 text-center\" value=\"$t\"></h3>";
							?>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <?php
								echo"<h3><input type=\"text\"  id=\"txtship\" name=\"txtship\"  style=\"height:31px;width:140px \" class=\"form-control form-control-sm border-0 text-center\" value=\"$s\"></h3>";
							?>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <?php
							$ans=$s+$t;
							echo"<h3><input type=\"text\"  id=\"total\" name=\"total\" style=\"height:31px;width:140px \" class=\"form-control form-control-sm border-0 text-center\" value=\"$ans\"></h3>";
							?>
                        </div>
                       <button   href="javascript:void(0)" class="btn btn-block btn-primary buy_now font-weight-bold my-3 py-3">Proceed To Payment</button>
					<button  id="btnorder" name="btnorder"  class="btn btn-block btn-primary font-weight-bold my-3 py-3"  type="submit">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form> 
 <!-- Cart End -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
	 var v=parseInt(total.value)*100;
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_7M9lravVQLvuWg",
    "amount": v, // 2000 paise = INR 20
    "name": "JAY AMBE ACRYLIC",
    "description": "Payment",
    "image": "ganesh1.png",
    "handler": function (response){
          $.ajax({
            url: 'http://localhost/razorpay/payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: 
			{
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : v ,product_id : product_id,
            }, 
            success:function (msg) 
			{
               window.location.href = 'http://localhost/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });

</script>

	
	
<?php
 
 include('footer.php');
	
?>
