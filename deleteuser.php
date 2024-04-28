<?php
ob_start();
include('profile.php');
$id=$_REQUEST['id'];
$s="delete from tblbuyer where id='$id'";
if(mysqli_query($con,$s))
{
  header("Location: manageuser.php",true);
}
?>