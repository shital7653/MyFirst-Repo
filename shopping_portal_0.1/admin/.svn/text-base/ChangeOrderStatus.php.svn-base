<?php
	include_once('../model/db.php');
	$database_obj=connectDB();
	$sql="CALL sp_update_order_status(".mysql_real_escape_string($_REQUEST['order_id']).",'".mysql_real_escape_string($_REQUEST['status'])."')";
	echo $sql;
	$database_obj->query($sql);
	header('location: VOrder.php');
?>
