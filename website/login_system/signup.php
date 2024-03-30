<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	
	if(!empty($user_name) && !empty($password))
	{
		// save to database
		$user_id=random_num(20);
		$query = 'insert into `users`(`user_id`,`user_name`,`password`)values("'.$user_id.'","'.$user_name.'","'.$password.'")';
		
		mysqli_query($con, $query);
		header("Location:login.php");
		die;
	} else 
	{
		echo "Please enter some valid information!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CREATE ACCOUNT </title>
	
</head>
<body>

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

.logo{
	width:60px;
	cursor:pointer;
}

body{
	
	width:100%;
	height:100vh;
	background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images/12.jpg);
	background-position:center;
	background-size: cover;
	padding-left:8%;
	padding-right:8%;
	box-sizing:border-box;
}

.login-form{
	width: 250px;
	top: 60%;
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
	font-size: 18px;
	width: 100%;
	padding: 10px 5px;
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

	<img src ="images/123N.png" class="logo">
	<nav>
	<ul>
		<li><a href="Home.html">HOME</a><li>
		<li><a href="AboutUS.html">ABOUT US</a><li>
		<li><a href="ContactUS.html">CONTACT US</a><li>
		<li><a href="LoginPage.html">SIGN IN</a><li>
	</ul>
	</nav>
	<div class="login-form">
	<h1>Create Account </h1>
	<form method="post">
		<div>
		<label for="user_name">Email</label>
		<input id="text" type="text" name="user_name"><br></br>
	</div>
	
	<div>
		<label for="password">Password</label>
		<input id="text" type="password" name ="password"><br></br>
	</div>
	
	<div>
		<input id="button" type="submit" value="Sign up"><br></br>
	</div>
	
	
	</form>
	</div>
</body>
</html>