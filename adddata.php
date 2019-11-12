<?php
	
	include 'conn.php';
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$user_id = $_POST['user_id'];
	
	$connect->query("INSERT INTO admin(name,email,phone,address,password,user_id) VALUES ('".$name."','".$email."',
	'".$phone."','".$address."','".$password."',1)")
?>
