<?php
	include_once('../model/db.php');
	function insertProduct($name,$desc,$price,$quantity,$image){
		$database_obj=connectDB();
		$sql="CALL sp_insert_product('".mysql_real_escape_string($name)."','".mysql_real_escape_string($desc)."','".mysql_real_escape_string($price)."','".mysql_real_escape_string($quantity)."','".mysql_real_escape_string($image)."')";
		$database_obj->query($sql);
	}
?>
