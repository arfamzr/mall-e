<?php
	
	include 'conn.php';
	
	$mall_id = $_POST['mall_id'];
	
	$connect->query("DELETE FROM mall WHERE mall_id=".$mall_id);
?>
