<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

:root{
			--black: #2f2f2f;
			--light-bg: #4f4f4f;
			--green: #00ff00;
			--white: #fff;
	}
* {
	box-sizing: border-box;
}

body {
	background: var(--black);
	background-image: url(image/deg_1.jpg);
	background-position: cover;
	background-attachment: fixed;
	background-repeat: no-repeat;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 95vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	outline: none;
	border: 2px solid var(--white);
	background-color: var(--green);
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: var(--white);
}

form {
	background-color: var(--white);
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: var(--white);
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	flex-wrap: wrap;
	width: 768px;
	max-width: 100%;
	min-height: 460px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: var(--green);
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

@media screen and (max-width: 600px){
	.container{
		display: flex;
		flex-direction: row-reverse;
	}
}
	</style>
</head>
<body>

<div class="container" id="container">

	<div class="form-container sign-up-container">
		<form method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook"></i></a>
				<a href="#" class="social"><i class="fa fa-google"></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="name" placeholder="Name">
			<input type="email" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<button name="signUp">SignUp</button>
		</form>
	<?php	 
		if(isset($_POST["signUp"]))
		{
			$name=$_POST["name"];
			$email=$_POST["email"];
			$password=$_POST["password"];
			$con=mysqli_connect("localhost","root","","e_learning");
			$sql="INSERT INTO `newusers`(`Name`, `Email`, `Password`) VALUES  ('$name','$email','$password')";
			$rs=mysqli_query($con,$sql);
		}
	?>
	</div>

	<div class="form-container sign-in-container">
		<form method="POST">
			<h1>Sign In</h1>
			<div class="social-container">
			<a href="#" class="social"><i class="fa fa-facebook"></i></a>
			<a href="#" class="social"><i class="fa fa-google"></i></a>
			<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
		</div>
		<span>or use your account</span>
		<input type="email" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="Password">
		<a href="#">Forgot Your Password</a>
		<button name="signIn">Sign In</button>
		</form>
	<?php
		if(isset($_POST["signIn"])){
			$email=$_POST["email"];
			$password=$_POST["password"];
			$con=mysqli_connect("localhost","root","","e_learning");
			$sql="SELECT * FROM e_learning WHERE Email=$email";
			$rs=mysqli_query($con,$sql);
			while ($row=mysqli_fetch_assoc($rs)) {
				$demail=$row['Id'];
				$pass=$row['Id'];
			}if($email==$demail){
				echo "Welcome";
			}else{
				echo "Invalid user";
			}
		}
	?>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>
