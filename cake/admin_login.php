<?php
	session_start();
include 'dbcon.php';
	$email=$_GET['e1'];
	$pass=$_GET['p1'];
	$sql="select * from admin_block where admin_email='".$email."' and admin_pass='".$pass."';";
	echo $sql;
	$x=mysqli_query($con,$sql);
	$nr=mysqli_num_rows($x);
	if($nr>0)
	{
		$_SESSION["a_name"]=$email;
		header('location:admin_side.php');
	}
	else
	{
			echo "<center><a href='admin_login.html'>"."Please Register"."</a></center>";
	}
?>