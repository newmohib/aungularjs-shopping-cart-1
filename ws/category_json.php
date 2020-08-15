<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
 $db=new mysqli("localhost:3307","root","","angular_project");
 
 
$table=$db->query("select id,name from category");
 
 $categories=array();
 
 while(list($id,$name)=$table->fetch_row()){
	
	$row=array("id"=>$id,"name"=>$name);		
	array_push($categories,$row); 
	 
 }
  
echo json_encode($categories);
 
?>