<?php
	session_start();
	include 'dbcon.php';
	$email=$_GET['e1'];
	$pass=$_GET['p1'];
	$sql="select * from register where Email_ID='".$email."' and PassWord='".$pass."';";
	echo $sql;
	$x=mysqli_query($con,$sql);
	$nr=mysqli_num_rows($x);
	if($nr>0)
	{
		$_SESSION["u_name"]=$email;
		setcookie("login",$email,time()+3600);
		header('location:user_product_view.php');
	}
	else
	{
			echo "<center><a href='Register.html'>"."Please Register"."</a></center>";
	}
?>