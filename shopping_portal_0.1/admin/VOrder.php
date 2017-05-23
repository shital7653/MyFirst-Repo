<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Online Shopping Portal::Home</title>
	</head>
	<body>
		<div id="content">
		<?php
			include_once('header.php');
			include_once('MOrder.php');
			session_start();
			$count=getOrderDetail();
		?>
		<table width='100%'>
			<thead>
				<tr>
					<th>Order Id</th>
					<th>Date</th>
					<th>Order Status</th>
					<th>Change Status</th>
					<th>Payment Status</th>
				</tr>
			</thead>
			<tbody>
			<?php
					for($i=$count-1;$i>=0;$i--){
				?>
				<tr>
					<td><?php echo $_SESSION['Order'][$i]['order_id']; ?></td>
					<td><?php echo $_SESSION['Order'][$i]['datetime']; ?></td>
					<td><?php echo $_SESSION['Order'][$i]['order_status']; ?></td>
					<td>
						<form action="ChangeOrderStatus.php">
						<p>
						<input type="hidden" name="order_id" value="<?php echo $_SESSION['Order'][$i]['order_id']; ?>" />
						<select name="status">
							<option vlaue="Waiting">Waiting</option>
							<option value="Shipped">Shipped</option>
						</select>
						<input type="submit" value="Submit" />
						</p>
						</form>
					</td>
					<td><?php echo $_SESSION['Order'][$i]['payment_status']; ?></td>
										<td>
						<form action="ChangePaymentStatus.php">
						<p>
						<input type="hidden" name="order_id" value="<?php echo $_SESSION['Order'][$i]['order_id']; ?>" />
						<select name="status">
							<option vlaue="Unpaid">Unpaid</option>
							<option value="Paid">Paid</option>
						</select>
						<input type="submit" value="Submit" />
						</p>
						</form>
					</td>
				</tr>
				<?php
					}
				?>
			</tbody>
			<?php include_once('footer.php'); ?>
		</div>
	</body>
</html>
