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
			include_once('../model/SearchProducts.php');
			$count=getProducts();
		?>
			<table>
			<thead>
				<tr>
					<th>Product</th>
					<th>Price</th>
					<th>Availabe Quantity</th>
				</tr>
			</thead>
			<tbody>
				<?php
					for($i=$count-1;$i>=0;$i--){
				?>
				<tr>
					<td><a href="ProductDetail.php?id=<?php echo $_SESSION['prod_detail'][$i]['product_id']; ?>"><?php echo $_SESSION['prod_detail'][$i]['name']; ?></a></td>
					<td><?php echo $_SESSION['prod_detail'][$i]['price']; ?></td>
					<td><?php echo $_SESSION['prod_detail'][$i]['quantity']; ?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
			</table>
		
		</div>
		<?php include_once "footer.php" ?>
	</body>
</html>
