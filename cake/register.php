<?php
	session_start();
	$con = mysqli_connect("localhost","root","","cake_shop");
	if(!$con)
	{
		echo "Error".mysqli_connect_error();
	}
	else
	{
		echo "Connection Succesfull<br>";
	}
	//echo "hi";
	$fname=$_GET['f1'];
	$lname=$_GET['l1'];
	$email=$_GET['e1'];
	$pass=$_GET['p1'];
	$sql="insert into register (FirstName,LastName,Email_ID,PassWord) values ('".$fname."','".$lname."','".$email."','".$pass."')";
	//echo $sql;
	$x=mysqli_query($con,$sql);
	if($x)
	{
		header('Location:login.html');
	}
?>