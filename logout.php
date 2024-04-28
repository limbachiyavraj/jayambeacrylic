<?php
ob_start(); 
 include('header.php');
	
?>

<?php
session_start();
session_destroy();
header("Location: register.php");
?>