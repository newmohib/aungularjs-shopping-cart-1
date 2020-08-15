<?php session_start();
 
 if(isset($_POST["btnLogin"])){
	$username=trim($_POST["txtUsername"]);
	$password=trim($_POST["txtPassword"]);
	
	$users=file("users.txt");
	
	foreach($users as $user){
		
	  list($_id,$_username,$_password)=explode(",",$user);
	
	  if($username==trim($_username) && $password==trim($_password)){
	   
	    $_SESSION["s_id"]=$_id;
	    $_SESSION["s_username"]=$_username;	
			  	
		break;
      }
	
	}//end loop
	
	
	if(isset($_SESSION["s_username"])){
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