<?php
		require_once('db.php');
		function updateUser($uname,$fname,$lname,$sec_ques,$sec_ans,$email,$phone,$dob){
			$database_obj=connectDB();
				$sql='CALL sp_update_profile("'.mysql_real_escape_string($uname).'","'.mysql_real_escape_string($fname).'","'.mysql_real_escape_string($lname).'","'.mysql_real_escape_string($sec_ques).'","'.mysql_real_escape_string($sec_ans).'","'.mysql_real_escape_string($email).'",'.mysql_real_escape_string($phone).',"'.mysql_real_escape_string($dob).'")';
				$database_obj->query($sql);
		}
		function getUserData(){
			$database_obj=connectDB();
			date_default_timezone_set('Asia/Calcutta');
			if(isset($_SESSION['user_name'])){
				$sql="CALL sp_fetch_user_data('".$_SESSION['user_name']."')";
				foreach($database_obj->query($sql) as $row){
					$_SESSION['upd_form_db']=$row;
					$_SESSION['upd_form_db']['year']=date("Y",strtotime($row['dob']));
					$_SESSION['upd_form_db']['month']=date("m",strtotime($row['dob']));
					$_SESSION['upd_form_db']['date']=date("d",strtotime($row['dob']));
					$_SESSION['upd_form_db']['other_ques']=$row['sec_question'];
				}
			}
		}
?>
