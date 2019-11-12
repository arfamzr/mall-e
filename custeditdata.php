<?php
	
	include 'conn.php';
	
	$cust_id = $_POST['cust_id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	
	$connect->query("UPDATE customer SET name='".$name."',email='".$email."',phone='".$phone."',address='".$address."'
	WHERE cust_id=".$cust_id);
	
?>
