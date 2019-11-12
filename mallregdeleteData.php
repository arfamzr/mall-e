<?php
	
	include 'conn.php';
	
	$mall_id = $_POST['mall_id'];
	
	$connect->query("DELETE FROM mallreg WHERE name=".$name);
?>
