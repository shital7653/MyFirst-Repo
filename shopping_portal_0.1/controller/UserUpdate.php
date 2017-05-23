<?php
	session_start();	
	include_once('validator.php');
	include_once('../model/UserUpdate.php');
	$array=$_REQUEST;
	$_SESSION['upd_form']=$array;
	$error_code=0;
	if(check_null($array['fname'])){
		$error_code=6;
	}
	else if(!preg_match("/^[a-zA-Z]{1,50}$/",$array['fname'])){
		$error_code=17;
	}
	else if(check_null($array['lname'])){
		$error_code=7;
	}
	else if(!preg_match("/^[a-zA-Z]{1,50}$/",$array['lname'])){
		$error_code=18;
	}
	else if(check_null($array['email'])){
		$error_code=8;
	}
	else if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$array['email'])){
		$error_code=9;
	}
	else if(!checkdate($array['month'],$array['date'],$array['year'])){
		$error_code=10;
	}
	else if(checkage($array['month'],$array['date'],$array['year'])<18){
		$error_code=11;
	}
	else if(strlen($array['phone'])<10 || !is_numeric($array['phone'])){
		$error_code=13;
	}
	else if(check_null($array['other_ques'])){
		$error_code=14;
	}
	else if(check_null($array['sec_ans'])){
		$error_code=15;
	}	
	if($error_code>0){
		$_SESSION['upd_form']['m']=$error_code;
		header('location: ../view/UserUpdate.php');
	}
	else{
		$dob=$array['year']."-".$array['month']."-".$array['date'];
		updateUser($_SESSION['user_name'],$array['fname'],$array['lname'],$array['other_ques'],$array['sec_ans'],$array['email'],$array['phone'],$dob);
		$_SESSION['upd_form']['m']=21;
		header('location: ../view/UserUpdate.php');
	}
?>
