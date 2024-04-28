<?php

	ob_start(); 
   include('topheader.php');

?>

<script>



function quantity11()
	{
		total1.value=parseInt(amount1.value)*parseInt(quantity1.value);
		return false;
	}
function fun1()
	{
		if(total1.value!=0)
		{
		if(ship.value==0)
		{
			ship.value=parseInt(ship.value);
		}
		else
		{
			ship.value=parseInt(ship.value)-60;
		}
		quantity1.value=parseInt(quantity1.value)-1;
		if(quantity1.value<0)
		{
			quantity1.value=0;
		}
		if(txtsubtotal.value==0)
		{
			txtsubtotal.value=parseInt(txtsubtotal.value);
		
		}
		else
		{
		txtsubtotal.value=parseInt(txtsubtotal.value)-parseInt(amount1.value);
		
		}
		total1.value=parseInt(amount1.value)*parseInt(quantity1.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
		}
		return false;
	}
function fun2()
	{
		if(total2.value!=0)
		{
		if(ship.value==0)
		{
			ship.value=parseInt(ship.value);
		}
		else
		{
			ship.value=parseInt(ship.value)-60;
		}
		quantity2.value=parseInt(quantity2.value)-1;
		if(quantity2.value<0)
		{
			quantity2.value=0;
		}
		if(txtsubtotal.value==0)
		{
			txtsubtotal.value=parseInt(txtsubtotal.value);
		
		}
		else
		{
		txtsubtotal.value=parseInt(txtsubtotal.value)-parseInt(amount1.value);
		
		}
		total2.value=parseInt(amount2.value)*parseInt(quantity2.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
		}
		return false;
	}
	function fun3()
	{
		if(total3.value!=0)
		{
		if(ship.value==0)
		{
			ship.value=parseInt(ship.value);
		}
		else
		{
			ship.value=parseInt(ship.value)-60;
		}
		quantity3.value=parseInt(quantity3.value)-1;
		if(quantity3.value<0)
		{
			quantity3.value=0;
		}
		if(txtsubtotal.value==0)
		{
			txtsubtotal.value=parseInt(txtsubtotal.value);
		
		}
		else
		{
		txtsubtotal.value=parseInt(txtsubtotal.value)-parseInt(amount3.value);
		
		}
		total3.value=parseInt(amount3.value)*parseInt(quantity3.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
		return false;
		}
	}
	function fun4()
	{
		if(total4.value!=0)
		{
		if(ship.value==0)
		{
			ship.value=parseInt(ship.value);
		}
		else
		{
			ship.value=parseInt(ship.value)-60;
		}
		quantity4.value=parseInt(quantity4.value)-1;
		if(quantity4.value<0)
		{
			quantity4.value=0;
		}
		if(txtsubtotal.value==0)
		{
			txtsubtotal.value=parseInt(txtsubtotal.value);
		
		}
		else
		{
		txtsubtotal.value=parseInt(txtsubtotal.value)-parseInt(amount4.value);
		
		}
		total4.value=parseInt(amount4.value)*parseInt(quantity4.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
		return false;

		}
	}
	function fun5()
	{
		if(total5.value!=0)
		{
		if(ship.value==0)
		{
			ship.value=parseInt(ship.value);
		}
		else
		{
			ship.value=parseInt(ship.value)-60;
		}
		quantity5.value=parseInt(quantity5.value)-1;
		if(quantity5.value<0)
		{
			quantity5.value=0;
		}
		if(txtsubtotal.value==0)
		{
			txtsubtotal.value=parseInt(txtsubtotal.value);
		
		}
		else
		{
		txtsubtotal.value=parseInt(txtsubtotal.value)-parseInt(amount5.value);
		
		}
		total5.value=parseInt(amount5.value)*parseInt(quantity5.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
		return false;
		}
	}
	function fun6()
	{
		if(total6.value!=0)
		{
		if(ship.value==0)
		{
			ship.value=parseInt(ship.value);
		}
		else
		{
			ship.value=parseInt(ship.value)-60;
		}
		quantity6.value=parseInt(quantity6.value)-1;
		if(quantity6.value<0)
		{
			quantity6.value=0;
		}
		if(txtsubtotal.value==0)
		{
			txtsubtotal.value=parseInt(txtsubtotal.value);
		
		}
		else
		{
		txtsubtotal.value=parseInt(txtsubtotal.value)-parseInt(amount6.value);
		
		}
		total6.value=parseInt(amount3.value)*parseInt(quantity6.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
		return false;
		}
	}
	function fun7()
	{
		if(total7.value!=0)
		{
		if(ship.value==0)
		{
			ship.value=parseInt(ship.value);
		}
		else
		{
			ship.value=parseInt(ship.value)-60;
		}
		quantity7.value=parseInt(quantity7.value)-1;
		if(quantity7.value<0)
		{
			quantity7.value=0;
		}
		if(txtsubtotal.value==0)
		{
			txtsubtotal.value=parseInt(txtsubtotal.value);
		
		}
		else
		{
		txtsubtotal.value=parseInt(txtsubtotal.value)-parseInt(amount7.value);
		
		}
		total7.value=parseInt(amount7.value)*parseInt(quantity7.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
		return false;
		}
	}
	function fun8()
	{
		if(total8.value!=0)
		{
		if(ship.value==0)
		{
			ship.value=parseInt(ship.value);
		}
		else
		{
			ship.value=parseInt(ship.value)-60;
		}
		quantity8.value=parseInt(quantity8.value)-1;
		if(quantity8.value<0)
		{
			quantity8.value=0;
		}
		if(txtsubtotal.value==0)
		{
			txtsubtotal.value=parseInt(txtsubtotal.value);
		
		}
		else
		{
		txtsubtotal.value=parseInt(txtsubtotal.value)-parseInt(amount8.value);
		
		}
		total8.value=parseInt(amount8.value)*parseInt(quantity8.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
		return false;
		}
	}
	function fun9()
	{
		if(total9.value!=0)
		{
		if(ship.value==0)
		{
			ship.value=parseInt(ship.value);
		}
		else
		{
			ship.value=parseInt(ship.value)-60;
		}
		quantity9.value=parseInt(quantity9.value)-1;
		if(quantity9.value<0)
		{
			quantity9.value=0;
		}
		if(txtsubtotal.value==0)
		{
			txtsubtotal.value=parseInt(txtsubtotal.value);
		
		}
		else
		{
		txtsubtotal.value=parseInt(txtsubtotal.value)-parseInt(amount9.value);
		
		}
		total9.value=parseInt(amount9.value)*parseInt(quantity9.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
		return false;
		}
	}
	function fun10()
	{
		if(total10.value!=0)
		{
		if(ship.value==0)
		{
			ship.value=parseInt(ship.value);
		}
		else
		{
			ship.value=parseInt(ship.value)-60;
		}
		quantity10.value=parseInt(quantity10.value)-1;
		if(quantity10.value<0)
		{
			quantity10.value=0;
		}
		if(txtsubtotal.value==0)
		{
			txtsubtotal.value=parseInt(txtsubtotal.value);
		
		}
		else
		{
		
		txtsubtotal.value=parseInt(txtsubtotal.value)-parseInt(amount10.value);
		
		}
		total10.value=parseInt(amount10.value)*parseInt(quantity10.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
		return false;
		}
	}

	function fun21()
	{
		quantity1.value=parseInt(quantity1.value)+1;
		total1.value=parseInt(amount1.value)*parseInt(quantity1.value);
        ship.value=parseInt(ship.value)+60;
		txtsubtotal.value=parseInt(txtsubtotal.value)+parseInt(amount1.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
		return false;
	}
	function fun22()
	{
		quantity2.value=parseInt(quantity2.value)+1;
		total2.value=parseInt(amount2.value)*parseInt(quantity2.value);
		ship.value=parseInt(ship.value)+60;
		txtsubtotal.value=parseInt(txtsubtotal.value)+parseInt(amount2.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
        return false;
	}
	function fun23()
	{
		quantity3.value=parseInt(quantity3.value)+1;
		total3.value=parseInt(amount3.value)*parseInt(quantity3.value);
		ship.value=parseInt(ship.value)+60;
		txtsubtotal.value=parseInt(txtsubtotal.value)+parseInt(amount3.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
        return false;
	}
	function fun24()
	{
		quantity4.value=parseInt(quantity4.value)+1;
		total4.value=parseInt(amount4.value)*parseInt(quantity4.value);
		ship.value=parseInt(ship.value)+60;
		txtsubtotal.value=parseInt(txtsubtotal.value)+parseInt(amount4.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
        return false;
	}
	function fun25()
	{
		quantity5.value=parseInt(quantity5.value)+1;
		total5.value=parseInt(amount5.value)*parseInt(quantity5.value);
		ship.value=parseInt(ship.value)+60;
		txtsubtotal.value=parseInt(txtsubtotal.value)+parseInt(amount5.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
        return false;
	}
	function fun26()
	{
		quantity6.value=parseInt(quantity6.value)+1;
		total6.value=parseInt(amount6.value)*parseInt(quantity6.value);
		ship.value=parseInt(ship.value)+60;
		txtsubtotal.value=parseInt(txtsubtotal.value)+parseInt(amount6.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
        return false;
	}
	function fun27()
	{
		quantity7.value=parseInt(quantity7.value)+1;
		total7.value=parseInt(amount7.value)*parseInt(quantity7.value);
		ship.value=parseInt(ship.value)+60;
		txtsubtotal.value=parseInt(txtsubtotal.value)+parseInt(amount7.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
        return false;
	}
	function fun28()
	{
		quantity8.value=parseInt(quantity8.value)+1;
		total8.value=parseInt(amount8.value)*parseInt(quantity8.value);
		ship.value=parseInt(ship.value)+60;
		txtsubtotal.value=parseInt(txtsubtotal.value)+parseInt(amount8.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
        return false;
	}
	function fun29()
	{
		quantity9.value=parseInt(quantity9.value)+1;
		total9.value=parseInt(amount9.value)*parseInt(quantity9.value);
		ship.value=parseInt(ship.value)+60;
		txtsubtotal.value=parseInt(txtsubtotal.value)+parseInt(amount9.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
        return false;
	}
	function fun30()
	{
		quantity10.value=parseInt(quantity10.value)+1;
		total10.value=parseInt(amount10.value)*parseInt(quantity10.value);
		ship.value=parseInt(ship.value)+60;
		txtsubtotal.value=parseInt(txtsubtotal.value)+parseInt(amount10.value);
		txtfinaltotal.value=parseInt(txtsubtotal.value)+parseInt(ship.value);
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
                            <th>Amount</th>
                            <th>Quantity</th>
                            <th>Total</th>
							<th>Remove</th>
                            
                        </tr>
                    </thead>
			 <?php
	
  include('dbcon.php');
  
  
	$name=$_SESSION['user'];
  $sql="SELECT `tblmcart`.`id` as `id`,`tblproduct`.`id` as `productid`,`tblmcart`.`product` as `product`,`tblproduct`.`price` as `price`,`tblmcart`.`total` as `total`,`tblmcart`.`quantity` as `quantity`,`tblproduct`.`photo` as `photo`,`tblmcart`.`status` as `status`  FROM `tblmcart`,`tblproduct` where `username`='$name' and `status`=1 and `tblmcart`.`productid`=`tblproduct`.`id`";
  
  $result=mysqli_query($con,$sql);
  
  $i=1;
  $count=mysqli_num_rows($result);
  
	
  $sc=0;
  $tc=0;
						
  $temp=0;
  while($line=mysqli_fetch_array($result))
   {
		$id=$line['id'];
		$cid=$line['id'];
		$productid=$line['productid'];
		$status=$line['status'];
		$product=$line['product'];
		$price=$line['price'];
		$ans=$line['total'];
		
		$q=$line['quantity'];
		$quantity=$q;
		$subtotal=$price*$q;
		$ship=60*$q;
		$sc=$sc+$ship;
		$tc=$tc+$subtotal;
		if($status==1)
	{
		$txtcid="cid$i";
	    $txtproductid="productid$i";
	    $txtproduct="product$i";
		$txtamount="amount$i";
		$txtquantity="quantity$i";
		$txtans="total$i";
		$txtship="ship$i";
		$add="add$i";
		$sub="sub$i";
		
		
		
		
		$fun="fun$i";
		$fun2="fun2$i";
		$quantity1="quantity$i";
		$i=$i+1;
		
    echo "<tr >";
	
    echo "<td>";
    echo $line['productid'];
	echo "<input type=\"hidden\" id=\"$txtcid\" name=\"$txtcid\" class=\"form-control form-control-sm bg-secondary border-0 text-center\" value=\"$cid\">";
    echo "<input type=\"hidden\" id=\"$txtproductid\" name=\"$txtproductid\" class=\"form-control form-control-sm bg-secondary border-0 text-center\" value=\"$productid\">";
    echo "<img style=\"height:100px;width:120px;\" src=\"".$line['photo']."\" />";
    echo "</td>";
    echo "<td>";
    echo "<input type=\"text\" id=\"$txtproduct\" name=\"$txtproduct\" style=\"height: 100px; width: 100px;\" class=\"form-control form-control-sm bg-secondary border-0 text-center\" value=\"$product\" />";
    echo "</td>";
    echo "<td>";
    echo "<input type=\"text\" id=\"$txtamount\" name=\"$txtamount\" class=\"form-control form-control-sm bg-secondary border-0 text-center\" value=\"$price\">";
    echo "<input type=\"hidden\" id=\"$txtship\" name=\"$txtship\" class=\"form-control form-control-sm bg-secondary border-0 text-center\" value=\"$ship\">";
    echo "</td>";
	echo "<td style=\"text-align:left;\" class=\"align-left\">
													
			<div class=\"input-group quantity mx-auto\"  style=\"width: 100px;\">
														
			<div class=\"input-group-btn\" >
															
				<input type=\"button\" id=\"$sub\" name=\"$sub\" onclick=\"return $fun();\" class=\"btn btn-sm btn-primary btn-minus\" style=\"height:31px\"  value=\"-\" />
														
				</div>
													
				<input type=\"text\" id=\"$txtquantity\" name=\"$txtquantity\"  style=\"height:31px\" class=\"form-control form-control-sm bg-secondary border-0 text-center\" value=\"$quantity\">
														
				<div class=\"input-group-btn\">

				<input type=\"button\" id=\"$add\" id=\"$add\"  onclick=\"return $fun2();\" class=\"btn btn-sm btn-primary btn-minus\" style=\"height:31px\"  value=\"+\" readonly />	</div>
				
				</div>
												
		</td>";   
	echo "<td>";
	$ans=$line['price']*$quantity;
    echo"<input type=\"text\" id=\"$txtans\" name=\"$txtans\" class=\"form-control form-control-sm bg-secondary border-0 text-center\" value=\"$ans\">";
    echo "</td>";
	echo "<td>";
	echo"<a href=\"deletecart.php?id=$id\"><h6 class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></h6></a>";
	echo "</td>";
	echo "<td>";
    echo "</td>";
	
    echo "</tr>";
	}
	
   }

  ?>		
					
                    
						
    						
    
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
				
				echo"<tr><td>city</td>
                <td><input type=\"text\" id=\"city\" name=\"city\" value=\"$city\" /></td>
                </tr>";
				
				echo"<tr><td>pincode</td>
                <td><input type=\"text\" id=\"pincode\" name=\"pincode\" value=\"$pincode\" /></td>
                </tr>";
				
			}

        				echo "</table>";
						$i=$i-1;
						echo "<input type=\"hidden\" class=\"place\"  name=\"txtcount\" id=\"txtcount\" value=\"$i\"  />";
                    
        
		
		?>
        
		
		</div>
                
                
   
	
            <div class="col-lg-4">
       <?php
					  if(isset($_POST['btnorder']))
                      {
						$userid=1;
						include("dbcon.php");
						$name=$_SESSION['user'];
						$sql="select id from tblbuyer where username='$name'";
						$result=mysqli_query($con,$sql);
						while($line=mysqli_fetch_array($result))
						{
							$userid=$line['id'];
						}
						$n=$_POST['txtcount'];
						$i=1;
						while ($i<=$n)
						{
						$cid="cid$i";
						$productid="productid$i";
						$productname="product$i";
						$username="user$i";
						$price="amount$i";
						$quantity="quantity$i";
						$ship="ship$i";
						$total="total$i";
						$mobile="mobile";
						$city="city";
						$pincode="pincode";
						$address="address";

						$cid=$_POST[$cid];
						$productid=$_POST[$productid];
						$productname=$_POST[$productname];
						$username=$_SESSION["user"];
						$price=$_POST[$price];
						$ship=$_POST[$ship];
						$sc=$sc+$ship;
						$total=$_POST[$total];
						$tc=$tc+$total;
						$quantity=$_POST[$quantity];		
						
						$city=$_POST[$city];
						$pincode=$_POST[$pincode];
						$address=$_POST[$address];
						$timeZone=new DateTimeZone("Asia/Kolkata");
						$date=new DateTime();
						$date->setTimeZone($timeZone);
						$d=$date->format('y-m-d h:i:s');
								
   						include('dbcon.php');
						   
									$sql="INSERT INTO `tblorder`(`id`,`productid`,`proname`,`username`,`price`,`quantity`,`ship`,`total`,`mobile`,`address`,`city`,`pincode`,`status`,`cdate`) VALUES (NULL,'$productid','$productname','$username','$price','$quantity','$ship','$total','$mobile','$address','$city','$pincode','ordered','$d');";
									
							if(mysqli_query($con,$sql))
							{
							
							$sql="update `tblmcart` set `status`=0 where `id`='$cid'";
							
							if(mysqli_query($con,$sql))
							
							{ 
								echo"<p style=\"color:white\">record updated</p>"; 
							}	
								
								echo"<p style=\"color:green; text-align:center;\">Record Inserted Successfully</p>";
								header("Location: orderdata.php");
							}
							else
							{
								echo"<p style=\"color:red; text-align:center;\">Error</p>";
							}
						$i=$i+1;	
					  }  
                   }
					 ?>		

                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                
				<div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <?php
								
								echo"<h3><input type=\"text\"  id=\"txtsubtotal\" name=\"txtsubtotal\"  style=\"height:31px;width:140px \" class=\"form-control form-control-sm border-0 text-center\" value=\"$tc\"></h3>";
							
							?>
							
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <?php
								
								echo"<h3><input type=\"text\"  id=\"ship\" name=\"ship\"  style=\"height:31px;width:140px \" class=\"form-control form-control-sm border-0 text-center\" value=\"$sc\"></h3>";
							
							?>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <?php
								
								$finaltotal=$sc+$tc;
								
								echo"<h3><input type=\"text\"  id=\"txtfinaltotal\" name=\"txtfinaltotal\" style=\"height:31px;width:140px \" class=\"form-control form-control-sm border-0 text-center\" value=\"$finaltotal\"></h3>";
							?>
							
                        </div>
						
						<button   href="javascript:void(0)" class="btn btn-block btn-primary buy_now font-weight-bold my-3 py-3">Proceed To Payment</button>
							<button  id="btnorder" name="btnorder"  class="btn btn-block btn-primary font-weight-bold my-3 py-3"  type="submit">place Order</button>
                
            </div>
        </div>
    </div>
</form> 
 <!-- Cart End -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
	 var v=parseInt(txtfinaltotal.value)*100;
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
