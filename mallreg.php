<?php
	
	include 'conn.php';
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$longitude = $_POST['longitude'];
	$latitude = $_POST['latitude'];
	$password = $_POST['password'];
	
		try{
		$query = $connect->query("INSERT INTO mallreg(name,email,phone,address,longitude,latitude,password) VALUES ('".$name."','".$email."',
		'".$phone."','".$address."','".$longitude."','".$latitude."','".$password."')");
		
		if($query){
			echo "owyes";
		}
	
	} catch (Exception $e){
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
	
	
?>