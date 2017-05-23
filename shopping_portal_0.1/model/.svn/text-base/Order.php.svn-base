<?php
	session_start();
	require_once('db.php');
	require_once('../model/ProductDetail.php');
	function insertOrder($prod_cost,$shopping_cost,$order_status,$payment_status,$user,$address){
		$database_obj=connectDB();
		$order_id=0;
		$sql='CALL sp_insert_order("'.mysql_real_escape_string($prod_cost).'","'.mysql_real_escape_string($shopping_cost).'","'.mysql_real_escape_string($order_status).'","'.mysql_real_escape_string($payment_status).'","'.mysql_real_escape_string($user).'","'.mysql_real_escape_string($address).'");';
		foreach ($database_obj->query($sql) as $row) {
			$order_id=$row['p_order_id'];
		}
		return $order_id;
	}
	function updateOrder($order_id,$prod_cost,$shopping_cost,$order_status,$payment_status,$user,$address){
		$database_obj=connectDB();
		$order_id=0;
		$sql='CALL sp_update_order("'.mysql_real_escape_string($order_id).'","'.mysql_real_escape_string($prod_cost).'","'.mysql_real_escape_string($shopping_cost).'","'.mysql_real_escape_string($order_status).'","'.mysql_real_escape_string($payment_status).'");';
		$database_obj->query($sql);
	}
	function insertOrderItem($order_id,$product_id,$quantity,$amount){
		$database_obj=connectDB();
		$sql='CALL sp_insert_order_item("'.mysql_real_escape_string($order_id).'","'.mysql_real_escape_string($product_id).'","'.mysql_real_escape_string($quantity).'","'.mysql_real_escape_string($amount).'");';
		$database_obj->query($sql);
	}
	function insertCompleteOrder(){
		$database_obj=connectDB();
		$database_obj->beginTransaction();
		if(isset($_SESSION['shopping_cart'])){
			$total=0;
			$order_id=insertOrder(0,0,'','',$_SESSION['user_name'],$_REQUEST['address']);
			foreach($_SESSION['shopping_cart'] as $item=>$quantity){
				getProduct($item);
				insertOrderItem($order_id,$item,$quantity,$quantity*$_SESSION['prod_detail']['price']);
				$total+=$quantity*$_SESSION['prod_detail']['price'];
			}
			updateOrder($order_id,$total,100,'Waiting for shipping','No payment',$_SESSION['user_name'],$_REQUEST['address']);
			header('location: ../view/OrderCompleted.php?id='.$order_id);
		}else{
			echo "You have no item in shopping cart.";
		}
		$database_obj->commit();
	}
?>
