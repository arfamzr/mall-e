<?php
	
	include 'conn.php';
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$longitude = $_POST['longitude'];
	$latitude = $_POST['latitude'];
	$password = $_POST['password'];
	$admin_id = $_POST['admin_id'];
	$user_id = $_POST['2'];
	
		try{
		$query = $connect->query("INSERT INTO mall2(name,email,phone,address,longitude,latitude,password,admin_id,user_id) VALUES ('".$name."','".$email."',
		'".$phone."','".$address."','".$longitude."','".$latitude."','".$password."','".$admin_id."',2)");
		
		if($query){
			echo "owyes";
		}
	
	} catch (Exception $e){
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
	
	
?>