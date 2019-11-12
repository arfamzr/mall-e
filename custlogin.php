<?php
	
	include 'conn.php';
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$queryResult=$connect->query("SELECT * FROM customer WHERE email='".$email."' 
	and password = '".$password."'");
	
	
	
	$result = array();
	
	while($fetchData=$queryResult->fetch_assoc()){
		$result[]=$fetchData;
	}
	
	echo json_encode($result);
	
?>