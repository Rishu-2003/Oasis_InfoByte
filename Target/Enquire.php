<?php

	session_start();
	header('location:E-Learning_Home_signin.html');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$message=$_POST['message'];

	$con=mysqli_connect('localhost','root','','e_learning');
	$sql=" INSERT INTO `contact_us`(`Name`,`Email`,`Mobile`,`Message`) VALUES ('$name','$email','$number','$message')";
	$rs=mysqli_query($con,$sql);
	
?>