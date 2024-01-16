<?php
$con = mysqli_connect("localhost","root","","cake_shop");
	if(!$con)
	{
		echo "Error".mysqli_connect_error();
	}
	else
	{
		//echo "Connection Succesfull<br>";
	}
?>