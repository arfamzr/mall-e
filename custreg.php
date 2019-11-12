<?php
	
	include 'conn.php';
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$admin_id = $_POST['admin_id'];
	$user_id = $_POST['user_id'];
	
	try{
		$query = $connect->query("INSERT INTO customer(name,phone,email,address,password,admin_id,user_id) VALUES ('".$name."','".$phone."',
		'".$email."','".$address."','".$password."',1001,3)");
		
		if($query){
			echo "owyes";
		}
	
	} catch (Exception $e){
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
	
	
	
?>
