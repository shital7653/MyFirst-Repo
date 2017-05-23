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
		
		$prod_id=$_REQUEST['id'];
		getProduct($prod_id);
		?>
		<?php
		if(isset($_SESSION['user_name'])){
		?>
		<table>
			<tr>
				<td colspan="2"><img src="<?php echo $_SESSION['prod_detail']['image_url']; ?>" alt=''/></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><?php echo $_SESSION['prod_detail']['name']; ?></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><?php echo $_SESSION['prod_detail']['description']; ?></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><?php echo $_SESSION['prod_detail']['price']; ?></td>
			</tr>
			<tr>
				<td>Availabel Quantity</td>
				<td><?php echo $_SESSION['prod_detail']['quantity']; ?></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td>
					<form action="../controller/AddToCart.php">
						<p>
						<input type="hidden" name="id" value="<?php echo $prod_id;?>" />
						<input type="text" name="quantity" value="1"/>
						<input type="submit" value="ADD TO CART" />
						</p>
					</form>
				</td>
			</tr>
		
		</table>
		<?php
		}
		else{
			header('location: UserLogin.php');
		}
		?>
		</div>
		<?php include_once "footer.php" ?>
	</body>
</html>
