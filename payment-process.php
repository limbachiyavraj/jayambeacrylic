<?php
    
 $data = [ 
         'user_id' => '1',
         'payment_id' => $_POST['razorpay_payment_id'],
         'amount' => $_POST['totalAmount'],
         'product_id' => $_POST['product_id'],
        ];
		
		{
								
									$con=mysqli_connect(@"localhost","root","","dbrazopay");
									$sql="INSERT INTO `tblonlinepay`(`user id`, `payment_id`, `product_id`) VALUES (NULL, '$data['user_id']','$data['payment_id']','$data['amount']','$data['product_id']');";
												
									
									
									if(mysqli_query($con,$sql))
										{
											
											echo "<p style=\"background-color:green;color:white;font-size:22px;\">successful!!!</p>";
											
										}
													
										else
											
											{
																				
												echo "error";
											
											}
										
		}

 // you can write your database insertation code here
	
 // after successfully insert transaction in database, pass the response accordingly
 $arr = array('msg' => 'Payment successfully credited', 'status' => true);  

 echo json_encode($arr);

?>

