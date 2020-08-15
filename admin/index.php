<?php session_start(); 

 require_once("../config/dbConfig.php");
 
 if(isset($_POST["btnLogin"])){
	$username=trim($_POST["txtUsername"]);
	$password=md5(trim($_POST["txtPassword"]));
	
   $user_table=$db->query("select id,username,password from user where username='$username' ");
   
  list($id,$_username,$_password)=$user_table->fetch_row();
  echo $id;
	if(isset($id)){
	    $_SESSION["s_id"]=$id;
	    $_SESSION["s_username"]=$_username;	
		header("location:home.php");
	}else{
	   $error="<span style='color:red;'>Incorrect username or password</span>";	
	}
	
 }
 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Contact Book</title>
<link href="css/style.css" rel="stylesheet" />
<style>

</style>

</head>

<body>

<div class="login-page">
  <div class="form">
    <div><?php echo isset($error)?$error:"";?></div>
    <div><b style="font-size:10px;color:gray; font-family:Tahoma, Geneva, sans-serif">LOGIN TO PROJECT</b></div>
   
    
    <form class="login-form" action="#" method="post">
      <input type="text" placeholder="username" name="txtUsername"/>
      <input type="password" placeholder="password" name="txtPassword"/>
      <input type="submit" value="Login" name="btnLogin" />
     
    </form>
  </div>
</div>


</body>
</html>