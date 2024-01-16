<?php
	session_start();
	include 'dbcon.php';
	if(!(isset($_SESSION["a_name"])))
	{
		header('location:admin_login.html');
	}
	$con = mysqli_connect("localhost","root","","cake_shop");
	$name=$_GET['x'];
	$sql="select * from product_details where c_name='".$name."'";
	$x=mysqli_query($con,$sql);
	$nr=mysqli_num_rows($x);
	if($nr>0)
	{
			echo "<table>";
			while($row=mysqli_fetch_assoc($x))
			{

					$cn1=$row['c_name'];
					$cs1=$row['c_shape'];
					$cw1=$row['c_weight'];
					$cf1=$row['c_flav'];
					$ci1=$row['c_img'];
			}
			echo "<form action='updateProduct.php' method='post' enctype='multipart/form-data'>";
			echo "<table>";
				echo "<tr>";
					echo "<td>";
					echo "<label>Cake_ID</label>";
					echo "</td>";
					echo "<td>";
					echo ":";
					echo "</td>";
					echo "<td>";
					echo "<input type='text' name='n1' value='".$cn1."'>";
					echo "<input type='hidden' name='n2' value='".$cn1."'>";
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>";
					echo "<label>Cake_Shape</label>";
					echo "</td>";
					echo "<td>";
					echo ":";
					echo "</td>";
					echo "<td>";
					echo "<input type='text' name='n3' value='".$cs1."'>";
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>";
					echo "<label>Cake_Weight</label>";
					echo "</td>";
					echo "<td>";
					echo ":";
					echo "</td>";
					echo "<td>";
					echo "<input type='text' name='n4' value='".$cw1."'>";
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>";
					echo "<label>Cake_Flavour</label>";
					echo "</td>";
					echo "<td>";
					echo ":";
					echo "</td>";
					echo "<td>";
					echo "<input type='text' name='n5' value='".$cf1."'>";
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>";
					echo "<label>Cake_Image</label>";
					echo "</td>";
					echo "<td>";
					echo ":";
					echo "</td>";
					echo "<td>";
					echo "<input type='file' name='n6' value='".$ci1."'>";
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>";
					echo "<input type='submit' value='Update'>";
					echo "</td>";
					echo "<td>";
					echo "</td>";
				echo "</tr>";
			echo "</table>";
			echo "</form>";
	}
	else
	{
		echo "Error".mysqli_connect_error;
	}
?>