<?php
	session_start();
	include 'dbcon.php';
	if(!(isset($_SESSION["a_name"])))
	{
		header('location:admin_login.html');
	}
	$con = mysqli_connect("localhost","root","","cake_shop");
	$name=$_GET['x'];
	$sql="delete from product_details where c_name='".$name."'";
	$x=mysqli_query($con,$sql);
	if(!$x)
	{
		echo "Error".mysqli_connect_error();
	}
	else
	{
		header('Location:viewProduct.php');
	}
?>