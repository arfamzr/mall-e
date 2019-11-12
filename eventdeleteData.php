<?php
	
	include 'conn.php';
	
	$cust_id = $_POST['cust_id'];
	
	$connect->query("DELETE FROM event WHERE event_id=".$cust_id);
?>
