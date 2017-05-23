<?php
	include_once('db.php');
	function checkUser($username,$password){
		$database_obj=connectDB();
		$exist=0;
		$sql='SELECT f_authenticate_user("'.mysql_real_escape_string($username).'","'.mysql_real_escape_string($password).'") as exist;';
		foreach ($database_obj->query($sql) as $row) {
	  		$exist=$row['exist'];
		}
		return $exist;
	}
?>
