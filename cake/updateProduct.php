<?php
	session_start();
	include 'dbcon.php';
	if(!(isset($_SESSION["a_name"])))
	{
		header('location:admin_login.html');
	}
	$con = mysqli_connect("localhost","root","","cake_shop");
	if(!$con)
	{
		echo "Error".mysqli_connect_error();
	}
	$namew=$_POST['n1'];
	$namep=$_POST['n2'];
	$shape=$_POST['n3'];
	$weight=$_POST['n4'];
	$flav=$_POST['n5'];
	$img=$_FILES['n6']['name'];
	$org=$_FILES['n6']['tmp_name'];
	$t="product/".$img;
	
	$sql="update product_details set c_name='".$namew."',c_shape='".$shape."',c_weight='".$weight."',c_flav='".$flav."',c_img='".$t."' where c_name='".$namep."'";
	echo $sql;
	$x=mysqli_query($con,$sql);
	if(!$x)
	{
		echo "Error".mysqli_connect_error();
	}
	else
	{
		//header('Location:viewProduct.php');
	}
?>