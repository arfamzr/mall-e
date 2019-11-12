<?php
	
	include 'conn.php';
	
	$name = $_POST['name'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$shop_id = $_POST['shop_id'];
	$mall_id = $_POST['mall_id'];
	$admin_id = $_POST['admin_id'];
	
	try{
		$query = $connect->query("INSERT INTO event(name,date,time,shop_id,mall_id,admin_id) VALUES ('".$name."','".$date."',
		'".$time."','".$shop_id."','".$mall_id."','".$admin_id."'");
		
		if($query){
			echo "owyes";
		}
	
	} catch (Exception $e){
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
	
	
	
?>
