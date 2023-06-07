<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$connect=mysqli_connect('localhost','root','','e_learning');
$select="select * from user_registration where name='$name' && email='$email'";
$query=mysqli_query($connect,$select);
$num=mysqli_num_rows($query);
if($num==1){
	// echo "<script> alert("User already exist"); </script>";
	 header('location:E_learning_signin.html');
}
else{
	$insert="insert into user_registration (name,email,password) values ('$name','$email','$password')";
	$insertQuery=mysqli_query($connect,$insert);
	// echo "<script> alert("User account created") </script>";
	 header('location:E_learning_signin.html');
}
?>