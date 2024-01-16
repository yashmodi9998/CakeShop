<?php
session_start();
include 'dbcon.php';
$cname=$_REQUEST['c1'];
$cshape=$_REQUEST['cs1'];
$cweight=$_REQUEST['cw1'];
$cflav=$_REQUEST['cf1'];
$cimg=$_FILES['img1']['name'];
$org=$_FILES['img1']['tmp_name'];
$t="product/".$cimg;
move_uploaded_file($org,$t);
$sql="insert into product_details (c_name,c_shape,c_weight,c_flav,c_img) values ('".$cname."','".$cshape."','".$cweight."','".$cflav."','".$cimg."')";
echo $sql;
	$link=mysqli_query($con,$sql);
if(!$link)
	{
		echo "Error".mysqli_connect_error();
	}

?>