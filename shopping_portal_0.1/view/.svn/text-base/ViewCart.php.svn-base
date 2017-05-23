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
		if(isset($_SESSION['user_name'])){
		?>
		<?php
		include('../model/ProductDetail.php');
		?>
		<table>
		<thead>
			<tr>
				<th>Item</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Tasks</th>
			</tr>
		</thead>
		<tbody>
<?php
	$total=0;
	if(isset($_SESSION['shopping_cart'])){
		$total=0;
		
		foreach($_SESSION['shopping_cart'] as $item=>$quantity){
			getProduct($item);
?>
		<tr>
		<td><?php echo $_SESSION['prod_detail']['name']; ?></td>
		<td><?php echo $quantity; ?></td>
		<td><?php echo $quantity*$_SESSION['prod_detail']['price']; ?></td>
		<td>
			<form action='../controller/RemoveItemFromCart.php'>
				<p>
					<input type="hidden" name="prod_id" value="<?php echo $item; ?>" />
					<input type="submit" value="Delete" />
				</p>
			</form>
		</td>
		</tr>
<?php
		$total+=$quantity*$_SESSION['prod_detail']['price'];
		}
	}else{
		
		echo "<tr><td colspan='3'>You have not selected any item</td></tr>";
	}
?>
		<tr>
			<td colspan="2" style='text-align:right'>Total Amount</td>
			<td><?php echo $total;?></td>
		</tr>
		<tr>
			<td></td>
			<td><a href="../view/SearchProducts.php">Continue Shopping</a></td>
			<td>
			<form id='order' action='../view/Order.php'>
				<p>
				<input type="submit" value="Checkout Order" />
				</p>
			</form>
			</td>
		</tr>
		</tbody>
		</table>
		<?php
		}
		else{
			header('location: UserLogin.php');
		}
		?>
		</div>
	</body>
</html>
