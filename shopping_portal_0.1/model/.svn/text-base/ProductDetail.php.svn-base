<?php
	require_once('db.php');
	function getProduct($prod_id){
		$database_obj=connectDB();
		$sql="CALL sp_product_detail('".$prod_id."')";
		foreach($database_obj->query($sql) as $row){
			$_SESSION['prod_detail']=$row;
		}
	}
?>
