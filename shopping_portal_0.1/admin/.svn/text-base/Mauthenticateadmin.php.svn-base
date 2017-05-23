<?php
	include_once('../model/db.php');
	function authenticate($username,$password){
		$database_obj=connectDB();
		$sql="SELECT f_authenticate_admin('".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."') AS exist;";
		$exist=0;		
		foreach($database_obj->query($sql) as $row){
			$exist=$row['exist'];
		}
		return $exist;
	}
	if(authenticate($_REQUEST['username'],$_REQUEST['password'])==1){
		$_SESSION['admin']=$_REQUEST['username'];
	}
?>
