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
			include_once('../model/TrackOrder.php');
			$count=getOrderDetail();
		?>
		<table>
			<thead>
				<tr>
					<th>Order Id</th>
					<th>Date</th>
					<th>Order Status</th>
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
					<td><?php echo $_SESSION['Order'][$i]['payment_status']; ?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		<?php
		}
		else{
			header('location: UserLogin.php');
		}
		?>
		</div>
	</body>
</html>
