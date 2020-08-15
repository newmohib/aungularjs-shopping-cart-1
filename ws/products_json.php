<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

 $db=new mysqli("localhost:3307","root","","angular_project");
 
 $category_id=$_GET["category"];
 
 $table=$db->query("select id,name,photo,uom,new_price,old_price from products where category_id='$category_id'");
 
 $products=array();
 
 while(list($id,$name,$photo,$uom,$new_price,$old_price)=$table->fetch_row()){
	
	$row=array("id"=>$id,"name"=>$name,"photo"=>$photo,"uom"=>$uom,"new_price"=>$new_price,"old_price"=>$old_price);		
	
	array_push($products,$row); 
	 
 }
  
echo json_encode($products);
 
?>