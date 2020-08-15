<?php
$_POST = json_decode(file_get_contents('php://input'),true);

$db=new mysqli("localhost:3307","root","","angular_project");

$customer_name=$_POST["customer_name"];
$shipping_address=$_POST["shipping_address"];
$payment_method=$_POST["payment_method"];
$remark=$_POST["remark"];

$db->query("insert into order_master(customer_name,shipping_address,payment_method,remark)values('$customer_name','$shipping_address','$payment_method','$remark')");

$order_id=$db->insert_id;

/*
$db->query("insert into order_details(order_id,item_id,price,qty)values('$order_id','$item_id','$price','$qty')");
*/
	

echo json_encode(array("order_id"=>$order_id));
	
	
?>