<?php
	
	include 'conn.php';
	
	$admin_id = $_POST['admin_id'];
	
	$connect->query("DELETE FROM admin WHERE admin_id=".$admin_id);
?>
