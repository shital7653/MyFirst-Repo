<?php
	include_once('db.php');
	function getSecurityQues($username){
		$database_obj=connectDB();
		$sec_ques="";
		$sql='SELECT f_get_security_question("'.mysql_real_escape_string($username).'") as sec_ques;';
		foreach ($database_obj->query($sql) as $row) {
  			$sec_ques=$row['sec_ques'];
		}
		return $sec_ques;
	}
?>
