<?php

$is_invalid = false;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	
	$mysqli = require_DIR_."/database.php";
	
	$sql = sprintf('SELECT * FROM `user` WHERE `email` = '%s'', $mysqli->real_escape_string($_POST['email']));
	

	
	$result = $mysqli->query($sql);
	
	$user = $result->fetch_assoc();
	
	if(user){
		
		if(password_verify($_POST['password'],$user['password_hash'])){
			
			session_start();
			
			session_regenerate_id();
			
			$_SESSION['user_id'] = $user['id'];
			
			header("Location: AdminHome.html");
			exit;
		}
	}
	$is_invalid = true;
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	
</head>
<<body>

<style type="text/css">

*{
	padding: 0;
	margin:0;
	font-family: sans-serif;
}

nav{
	flex:1;
	text-align:right;
}

nav ul li{
	list-style:none;
	display: inline-block;
	margin-left:60px;
}

nav ul li a{
	text-decoration: none;
	color: #fff;
	font-size:13px;
}
	
	
.logo{
	width:60px;
	cursor:pointer;
}

nav ul{
	flex: 1;
	text-align: right;
	padding-right: 30px;
}

nav ul li{
	display: inline-block;
	list-style:none;
	margin:10px 30px;
}

nav ul li a{
	color:#fff;
	text-decoration:none;
	position:relative;
}

nav ul li a::after{
	content:'';
	width:0%;
	height:3px;
	position:absolute;
	bottom:-5px;
	left:50%;
	transform:translateX(-50%);
	background:#fff;
	transition:width 0.3s;
}

nav ul li a:hover::after{
	width:50%;
}


body{
	
	width:100%;
	height:100vh;
	background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images/24.jpg);
	background-position:center;
	background-size: cover;
	padding-left:8%;
	padding-right:8%;
	box-sizing:border-box;
}

.login-form{
	width: 350px;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	position: absolute;
	color: #fff;
}

.login-form h1{
	font-size: 40px;
	text-align: center;
	text-transform: uppercase;
	margin: 40px 0;
}

.login-form p{
	font-size: 20px;
	margin: 15px 0;
}

.login-form input{
	font-size: 16px;
	width: 100%;
	padding: 15px 10px;
	border: 0;
	outline: none;
	border-radius: 5px;
}

.login-form button{
	font-size:18px;
	font-weight:bold;
	margin:20px 0;
	padding:10px 15px;
	width:50%;
	border-radius:5px;
}

.login-form{
		flex-basis:50%;
}

.login-form{
	animation: slideup 1s linear forwards;
}

@keyframes slideleft{
	0%{ 
		transform: translate(100px);
		opacity:0;
	}
	100%{
		transform:translate(0px);
		opacity:1;
	}
}
</style>


	<a href = "Home.html"><img src ="images/123N.png" class="logo"></a>
	<nav>
	<ul>
		<li><a href="Home.html">HOME</a><li>
		<li><a href="AboutUS.html">ABOUT US</a><li>
		<li><a href="ContactUs.html">CONTACT US</a><li>
		<li><a href="Register.html">REGISTER</a><li>
	</ul>
	</nav>
	<div class="login-form">
	<h1>SIGN IN Form </h1>
	
	
	<form method="post">
	<label for ="email">Email</label>
	<input type ="email" name ="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
	
	<label for ="password">Password</label>
	<input type ="password" name ="password" id="password">
	
	<button> Log in</button>
	</form>
	
	<?php if($is_invalid): ?>
		<em>Invalid login</em>
	<?php endif; ?>
	
</body>
<html>
	
	
	
	
	