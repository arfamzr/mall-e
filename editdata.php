<?php
	
	include 'conn.php';
	
	$admin_id = $_POST['admin_id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	
	$connect->query("UPDATE admin SET name='".$name."',email='".$email."',phone='".$phone."',address='".$address."'
	WHERE admin_id=".$admin_id);
	
?>
