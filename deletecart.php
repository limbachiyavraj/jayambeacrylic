<?php
ob_start();
include('mcart.php');
$id=$_REQUEST['id'];
$s="delete from tblmcart where id='$id'";
if(mysqli_query($con,$s))
{
  header("Location: mycart.php",true);
}
?>