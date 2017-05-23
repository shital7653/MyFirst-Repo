<?php
	include_once('db.php');
	function getOrderDetail(){
		$database_obj=connectDB();
		$sql="CALL sp_select_order('".$_SESSION['user_name']."');";
		$count=0;
		foreach($database_obj->query($sql) as $row){
			$_SESSION['Order'][$count]=$row;
			$count++;
		}
		return $count;
	}
?>
