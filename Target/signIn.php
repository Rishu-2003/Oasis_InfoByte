<?php
	session_start();
	// header('location:E_learning_signin.html');
	$email=$_POST['email'];
	$password=$_POST['password'];
	$connect=mysqli_connect('localhost','root','','e_learning');
	$select="select * from user_registration where email='$email' && password='$password'";
	$rs=mysqli_query($connect,$select);
	$num=mysqli_num_rows($rs);
	if($num==1){
		// $_SESSION['$rs[name]'];
		header('location:E-learning_Home_logout.php');
		//echo " <script> alert(User not found);</script>";
	}
	else{
		// 
	}

?>