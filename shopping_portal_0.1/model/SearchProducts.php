<?php
	require_once('db.php');
	function getProducts(){
		$database_obj=connectDB();
		$search_term="";
		if(isset($_SESSION['prod_search_form']['search'])){
			$search_term=$_SESSION['prod_search_form']['search'];
		}	
		$sql="CALL sp_search_products('".mysql_real_escape_string($search_term)."')";
		$count=0;
		foreach($database_obj->query($sql) as $row){
				$_SESSION['prod_detail'][$count]=$row;
				$count++;
		}
		return $count;
	}
?>
