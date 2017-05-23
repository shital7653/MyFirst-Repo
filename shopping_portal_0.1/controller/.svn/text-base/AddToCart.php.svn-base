<?php
	session_start();
	$arr=$_REQUEST;
	$_SESSION['shopping_cart'][$arr['id']]=$arr['quantity'];
	print_r($_SESSION['shopping_cart']);
	header('location: ../view/SearchProducts.php');
?>
