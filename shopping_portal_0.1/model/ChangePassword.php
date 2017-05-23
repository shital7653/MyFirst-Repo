<?php
	include_once('db.php');
	function changePasswd($uname,$old_passwd,$new_passwd){
		$database_obj=connectDB();
		$sql='CALL sp_reset_password("'.mysql_real_escape_string($uname).'","'.mysql_real_escape_string($old_passwd).'","'.mysql_real_escape_string($new_passwd).'")';
		echo $sql;
		$database_obj->query($sql);
	}	
?>
