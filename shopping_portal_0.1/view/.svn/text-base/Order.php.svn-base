<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Online Shopping Portal::Home</title>
		<?php include_once "meta.php" ?>
	</head>
	<body>
		<?php include_once "header.php" ?>
		<?php include_once "menu.php" ?>
		<div id="content">
		<?php
		include('../model/ProductDetail.php');
		?>
		<?php
		if(isset($_SESSION['user_name'])){
		?>
		<form action="../controller/Order.php">
			<fieldset>
			<legend>Provide Address for order shipping</legend>
			<p>
			<label for="address">Shipping Address</label>
			<textarea name="address">
			</textarea>
			</p>
			<p>
				<input type="submit" value="submit order" />
			</p>
			</fieldset>
		</form>
		<?php
		}
		else{
			header('location: UserLogin.php');
		}
		?>
		</div>
	</body>
</html>
