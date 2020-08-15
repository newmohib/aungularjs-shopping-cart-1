<?php

if(isset($_GET["order_id"])){

	$db=new mysqli("localhost:3307","root","","angular_project");
	$order_id=$_GET["order_id"];
	
	$_POST = json_decode(file_get_contents('php://input'),true);
	
	foreach($_POST as $v){
	
		$item_id=$v["id"];
		$price=$v["price"];
		$qty=$v["qty"];
		
		$db->query("insert into order_details(order_id,item_id,price,qty)values('$order_id','$item_id','$price','$qty')");
	
	}



}
	
	
?>