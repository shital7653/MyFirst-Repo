<?php
	session_start();
	unset($_SESSION['shopping_cart'][$_REQUEST['prod_id']]);
	header('location: ../view/ViewCart.php');
?>
