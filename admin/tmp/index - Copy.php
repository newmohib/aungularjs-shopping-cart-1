<?php session_start();
 
 if(isset($_POST["btnLogin"])){
	$username=$_POST["txtUsername"];
	$password=$_POST["txtPassword"];
	
	if($username=="admin" && $password="admin"){
		
	   $_SESSION["s_username"]="Jahidul Islam";	
	    header("location:home.php");	
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
    <div>Login to Contact Book</div>
   
    
    <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
      <input type="text" placeholder="username" name="txtUsername"/>
      <input type="password" placeholder="password" name="txtPassword"/>
      <input type="submit" value="Login" name="btnLogin" />
     
    </form>
  </div>
</div>


</body>
</html>