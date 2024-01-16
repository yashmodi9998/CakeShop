<?php
session_start();
include 'dbcon.php';
$x=$_GET['pid'];
$y=$_SESSION["u_name"];
//echo $x;
//echo $y;

if(isset($_SESSION["u_name"])){
	$sql="insert into addtocart (p_id,u_id) values ('".$x."','".$y."')";
	$link=mysqli_query($con,$sql);
	echo $sql;
	if($link)
	{
		echo "data inserted";
	}
	else
	{
		echo "Error".mysqli_connect_error();
	}
}
else{
	
	
}

?>
