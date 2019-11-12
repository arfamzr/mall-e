<?php
include 'conn.php';

$queryResult=$connect->query("SELECT mall_id, name from mall2");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
