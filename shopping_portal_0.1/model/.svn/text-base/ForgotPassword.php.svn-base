<?php
	include_once('db.php');
	function checkSecAns($username,$sec_ans){
		$database_obj=connectDB();
		$l_sec_ans=0;
		$sql='SELECT count(*) AS count FROM users WHERE sec_ans="'.mysql_real_escape_string($sec_ans).'" and username="'.mysql_real_escape_string($username).'";';
		foreach ($database_obj->query($sql) as $row) {
	  		$l_sec_ans=$row['count'];
		}
		return $l_sec_ans;
	}
	function getEmail($username){
		$database_obj=connectDB();
		$l_email=0;
		$sql="SELECT email FROM users WHERE username='".mysql_real_escape_string($username)."';";
		foreach ($database_obj->query($sql) as $row) {
	  		$l_email=$row['email'];
		}
		return $l_email;
	}
	function changePassword($username){
		$database_obj=connectDB();
		$password="";
		$sql="SELECT f_reset_password('".mysql_real_escape_string($username)."') as passwd;";
		foreach($database_obj->query($sql) as $row) {
			$password=$row['passwd'];
		}
		return $password;
	}
?>
