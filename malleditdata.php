
<?php
	
	include 'conn.php';
	
	$mall_id = $_POST['mall_id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	
	$connect->query("UPDATE mall SET name='".$name."',email='".$email."',phone='".$phone."',address='".$address."'
	WHERE mall_id=".$mall_id);
	
?>
