<?php
	
	include 'conn.php';
	
	$cust_id = $_POST['cust_id'];
	
	$connect->query("DELETE FROM customer WHERE cust_id=".$cust_id);
?>
