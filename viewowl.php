<?php
	include('header.php');
?>

<style>
   .p
   {
	   height:150px;
	   width:150px;
	   text-align:center;
	   border:5px solid white;
	   border-radius:20px;
	   transition:1.5s ease-in-out;
   }
   
	 .txt 
    { 
		 color:black;
  }
  .text
  {
	  border-bottom:none;
	  border-top:none;
	  border-left:none;
	  border-right:none;
	  width:150px;
	   margin-top:50px;
  }
  .text1
  {
	  border-bottom:none;
	  border-top:none;
	  border-left:none;
	  border-right:none;
	  width:30px; 
	  height:25px;
	  text-align:center; 
	  background-color:#F5F5F5;
	  margin-top:50px;
  }
 .text2
 {
	 width:130px;
	 margin-top:50px;
 }
 .text3
 {
	 width:35px;
	 border-bottom:none;
	  border-top:none;
	  border-left:none;
	  border-right:none;
	  margin-top:50px;
 }
 .remove
 {
	 width:40px;
	 height:40px;
	 margin-top:40px;
 }
 
</style>
<script>
	
	function quantity11()
	{
		total1.value=parseInt(amount1.value)*parseInt(quantity1.value);
		return false;
	}
	
	
	function fun1()
	{
		quantity1.value=parseInt(quantity1.value)-1;
		if(quantity1.value<0)
		{
			quantity1.value=0;
		}
		total1.value=parseInt(amount1.value)*parseInt(quantity1.value);
		return false;
	}
	function fun2()
	{
		quantity2.value=parseInt(quantity2.value)-1;
		if(quantity2.value<0)
		{
			quantity2.value=0;
		}
		total2.value=parseInt(amount2.value)*parseInt(quantity2.value);
		return false;
	}
	function fun3()
	{
		quantity3.value=parseInt(quantity3.value)-1;
		if(quantity3.value<0)
		{
			quantity3.value=0;
		}
		total3.value=parseInt(amount3.value)*parseInt(quantity3.value);
		return false;
	}
	function fun4()
	{
		quantity4.value=parseInt(quantity4.value)-1;
		if(quantity4.value<0)
		{
			quantity4.value=0;
		}
		total4.value=parseInt(amount4.value)*parseInt(quantity4.value);
		return false;
	}
	function fun5()
	{
		quantity5.value=parseInt(quantity5.value)-1;
		if(quantity5.value<0)
		{
			quantity5.value=0;
		}
		total5.value=parseInt(amount5.value)*parseInt(quantity5.value);
		return false;
	}
	function fun6()
	{
		quantity6.value=parseInt(quantity6.value)-1;
		if(quantity6.value<0)
		{
			quantity6.value=0;
		}
		total6.value=parseInt(amount6.value)*parseInt(quantity6.value);
		return false;
	}
	function fun7()
	{
		quantity7.value=parseInt(quantity7.value)-1;
		if(quantity7.value<0)
		{
			quantity7.value=0;
		}
		total7.value=parseInt(amount7.value)*parseInt(quantity7.value);
		return false;
	}
	function fun8()
	{
		quantity8.value=parseInt(quantity8.value)-1;
		if(quantity8.value<0)
		{
			quantity8.value=0;
		}
		total8.value=parseInt(amount8.value)*parseInt(quantity8.value);
		return false;
	}
	function fun9()
	{
		quantity9.value=parseInt(quantity9.value)-1;
		if(quantity9.value<0)
		{
			quantity9.value=0;
		}
		total9.value=parseInt(amount9.value)*parseInt(quantity9.value);
		return false;
	}
	function fun10()
	{
		quantity10.value=parseInt(quantity10.value)-1;
		if(quantity10.value<0)
		{
			quantity10.value=0;
		}
		total10.value=parseInt(amount10.value)*parseInt(quantity10.value);
		return false;
	}

	function fun21()
	{
		quantity1.value=parseInt(quantity1.value)+1;
		total1.value=parseInt(amount1.value)*parseInt(quantity1.value);
        return false;
	}
	function fun22()
	{
		quantity2.value=parseInt(quantity2.value)+1;
		total2.value=parseInt(amount2.value)*parseInt(quantity2.value);
        return false;
	}
	function fun23()
	{
		quantity3.value=parseInt(quantity3.value)+1;
		total3.value=parseInt(amount3.value)*parseInt(quantity3.value);
        return false;
	}
	function fun24()
	{
		quantity4.value=parseInt(quantity4.value)+1;
		total4.value=parseInt(amount4.value)*parseInt(quantity4.value);
        return false;
	}
	function fun25()
	{
		quantity5.value=parseInt(quantity5.value)+1;
		total5.value=parseInt(amount5.value)*parseInt(quantity5.value);
        return false;
	}
	function fun26()
	{
		quantity6.value=parseInt(quantity6.value)+1;
		total6.value=parseInt(amount6.value)*parseInt(quantity6.value);
        return false;
	}
	function fun27()
	{
		quantity7.value=parseInt(quantity7.value)+1;
		total7.value=parseInt(amount7.value)*parseInt(quantity7.value);
        return false;
	}
	function fun28()
	{
		quantity8.value=parseInt(quantity8.value)+1;
		total8.value=parseInt(amount8.value)*parseInt(quantity8.value);
        return false;
	}
	function fun29()
	{
		quantity9.value=parseInt(quantity9.value)+1;
		total9.value=parseInt(amount9.value)*parseInt(quantity9.value);
        return false;
	}
	function fun30()
	{
		quantity10.value=parseInt(quantity10.value)+1;
		total10.value=parseInt(amount10.value)*parseInt(quantity10.value);
        return false;
	}
</script>
</head>

    

        <!-- /. NAV SIDE  -->
		        
				
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Create Order</h2> 
<?php
                    if(!empty($_SESSION['user']))
                    {
                        echo "Welcome, ".$_SESSION['user'];
                    }
                    else
                    {
                        header("Location:login.php");
                    }
                 ?>					 
					<!-- Place Order code start-->
					 <?php
					  if (isset($_POST['btnporder']))
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
							    $cid="cart$i";
								$productid="productid$i";
								$amount="amount$i";
								$quntity="quantity$i";
								$price="total$i";
								$addres="address$i";
								$pincode="pincode$i";
								$mobile="mobileno$i";
								$productid=$_POST[$productid];
								$amount=$_POST[$amount];
								$quntity=$_POST[$quntity];
								$price=$_POST[$price];
								$addres=$_POST[$addres];
								$pincode=$_POST[$pincode];
								$mobile=$_POST[$mobile];
								$cid=$_POST[$cid];
								$timeZone=new DateTimeZone("Asia/Kolkata");
								$date=new DateTime();
								$date->setTimeZone($timeZone);
								$d=$date->format('y-m-d h:i:s');
								
   						include('dbcon.php');
						   $sql="insert into tblorder(orderid,userid,productid,amount,quntity,total,address,pincode,mobileno,status,orderdate)
						   values(NULL,'$userid','$productid','$amount','$quntity','$price','$addres','$pincode','$mobile',1,'$d')";
							if(mysqli_query($con,$sql))
							{
							$sql="update tblcart set status=0 where id=$cid";
							if(mysqli_query($con,$sql))
							{ 
								echo"record updated"; 
							}	
								
								echo"<p style=\"color:green; text-align:center;\">Record Inserted Successfully</p>";
							}
							else
							{
								echo"<p style=\"color:red; text-align:center;\">Error</p>";
							}
						$i=$i+1;	
					  }  
                   }
					 ?>
					 <!-- Place Order code End-->
					 
					</div>
     
	 <div class="row">
        <div class="col-md-12">	 
					 <form enctype="multipart/form-data" class="forms-sample" id="form" name="form" method="POST" action="">
					 <table class="table table-striped table-success">
              <!---cart--->					
					<?php
						 include('dbcon.php');
						 $name=$_SESSION['user'];
					     $id=1;
	                     $sql="SELECT * FROM tbluser where username='$name'";
                         $result=mysqli_query($con,$sql);
						 echo"<table class=\"table\" ><tr style=\"background-color:black;height:50px; color:white;line-height:50px;\"><th>photo</th><th>id</th><th>Product Name</th><th>Price</th><th width=\"200px\">Quantity</th><th>Total</th><th>Address</th><th>Pincode</th><th>Mobile No</th><th>Remove</th></tr>";
	
						
						while($line=mysqli_fetch_array($result))
                        {
                            $id=$line['id'];
                            echo "$id";
                        }
						$sql="SELECT tblcart.id as cartid,tblcart.status as cs,tblproduct.id as pid,tblproduct.photo as pphoto,tblproduct.name as pname,tblproduct.price as pprice,tblproduct.quantity as pquantity,tbluser.address as uaddress,tbluser.pincode as upincode,tbluser.mobileno as umobileno  FROM  tbluser inner join tblproduct inner join tblcart   where tblcart.userid=tbluser.id and tblcart.productid=tblproduct.id and tbluser.id='$id' ";
						$result=mysqli_query($con,$sql);
						$i=1;
                        while($line=mysqli_fetch_array($result))
                        {
							$caid=$line['cartid'];
							$cstatus=$line['cs'];
							$id2=$line['pid'];
							$name=$line['pname'];
							$quantity=1;
							$price=$line['pprice'];
							$photo=$line['pphoto'];
							$address=$line['uaddress'];
						    $pincode=$line['upincode'];
							$mobileno=$line['umobileno'];
							if($cstatus==1)
							{
							    $txtcid="cart$i";
								$txtpid="productid$i";
								$add="add$i";
								$txtam="amount$i";
								$txtq="quantity$i";
								$txtt="total$i";
								$txta="address$i";
								$txtp="pincode$i";
								$txtm="mobileno$i";
								$btnr="remove$i";
								$btnre="btnremove$i";
								$sub="sub$i";

						$fun="fun$i";
						$fun2="fun2$i";
						$quantity1="quantity$i";
													 
						$i=$i+1;
								 
							echo"<tr>";
							 
							echo"<td >";
			                $ph=$line['pphoto'];
			                echo "<img src=\"$ph\" class=\"p\"  />";
			                echo"</td>";
			                
							 echo"<td>";
						     echo "<input type=\"hidden\" class=\"text3\"  name=\"$txtcid\" id=\"$txtcid\" value=\"$caid\"  />";
							 echo "<input type=\"text\" class=\"text3\"  name=\"$txtpid\" id=\"$txtpid\" value=\"$id2\"  />";
							 echo"</td>";
							
					        echo"<td>";
							echo "<input type=\"text\" class=\"text\"  name=\"name\" id=\"name\" value=\"$name\" readonly />";
							echo"</td>";
							
							echo"<td>";
							echo "<input type=\"text\"  name=\"$txtam\" class=\"text\" style=\"width:130px;\"  id=\"$txtam\" value=\"$price\" readonly />";
							echo"</td>";
							
							echo"<td>";
						    echo "<input type=\"button\" name=\"$sub\"  id=\"$sub\" onclick=\"return $fun();\" style=\"background-color:#F4BC1C; border:none; height:25px; width:25px; font-size:22px; text-align:center;\"  value=\"-\" />";
							echo "<input type=\"text\" name=\"$txtq\" class=\"text1\"  id=\"$txtq\"  onkeyup=\"return $quantity1();\" value=\"$quantity\" />";
							echo "<input type=\"button\" name=\"$add\"  id=\"$add\" onclick=\"return $fun2();\" style=\"background-color:#F4BC1C; border:none; height:25px; width:25px; font-size:22px; text-align:center;\" value=\"+\" />";
							echo"</td>";
							
							echo"<td>";
							$total=$line['pprice']*$quantity;
							echo "<input type=\"text\" name=\"$txtt\" class=\"text\"  id=\"$txtt\" value=\"$total\">";
							echo"</td>";
							
							echo"<td>";
						    echo "<input type=\"text\" name=\"$txta\"  class=\"text2\" id=\"$txta\" value=\"$address\" />";
							echo"</td>";
							
							echo"<td>";
							echo "<input type=\"text\" name=\"$txtp\" class=\"text2\" id=\"$txtp\" value=\"$pincode\" />";
							echo"</td>";
							
							echo"<td>";
							echo "<input type=\"text\" name=\"$txtm\" class=\"text2\" id=\"$txtm\" value=\"$mobileno\" />";
							echo"</td>";
							
							echo"<td>";
							echo"<a class=\"btn remove\"  href=\"updatecart.php?id=$caid\"><i class=\"fa-solid fa-trash\"></i></a>";
                            echo"</td>";
						
							echo"</tr >";
                            }
						}
                        echo"</table>";
						$i=$i-1;
						echo "<input type=\"hidden\" class=\"place\"  name=\"txtcount\" id=\"txtcount\" value=\"$i\"  />";
						echo "<center><input type=\"submit\" name=\"btnporder\" id=\"btnporder\" value=\"Place Order\"  class=\"btn btn-success\">";
						
						 ?>		
					</div>
					<!---cart--->		 
						
				 </div> 
       		 

				</div>
				
               </div>
             
<!-- /. ROW  -->			

<?php
	include('footer.php');
?>

   
</body>
</html>