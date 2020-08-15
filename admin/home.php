<?php session_start();
  require_once("../config/dbConfig.php");
   date_default_timezone_set("Asia/Dhaka");
   
   if(!isset($_SESSION["s_username"])){
	   header("location:index.php");
   }
  
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link href="css/bootstrap.min.css" rel="stylesheet" />
 <link href="css/sticky-footer-navbar.css" rel="stylesheet">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      
   <style>
     .material-icons.red600 { color:#993333; }
   </style>   
      
</head>
<body>
  
  <?php include("header.php")?>
 
  <div class="container" style="margin-top:70px;">
   <?php
       include("placeholder.php");
   ?>
  </div>

  <?php include("footer.php") ?>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>