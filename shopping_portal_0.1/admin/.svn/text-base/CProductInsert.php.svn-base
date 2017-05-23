<?php
	include_once('MProductInsert.php');
	$error_code=0;
	$array=$_REQUEST;
	$_SESSION['prod_form']=$array;
	if($error_code!=0){
		$_SESSION['prod_form']['m']=$error_code;
	}else{
		insertProduct($array['pname'],$array['desc'],$array['price'],$array['quantity'],$array['image']);
		echo "Product informatin is successfully inserted. Add <a href='VProductInsert.php'> other product </a>";
	}
?>
