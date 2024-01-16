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
	if(!(isset($_SESSION["a_name"])))
	{
		header('location:admin_login.html');
	}
	$sql="select count(*) as total from product_details";
	$x=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($x);
	$r=$data['total'];
	$limit=5;
	$page=ceil($r/$limit);
	for($i=1;$i<=$page;$i++)
	{
		?>
		<a href="viewProduct.php?page=<?php echo $i ?>">
			<?php echo $i ?>
		</a>
		<?php
	}
	//	$page=1;
		if(isset($_GET['page']))
		{
			$page=$_GET['page'];
		}
		$l=$page-1;
		$position=$l*$limit;
		$sql="select * from product_details limit ".$position.",".$limit;
		$result=mysqli_query($con,$sql);
		$nr=mysqli_num_rows($result);
		echo "<br><br>";
		echo "<table border='1'>";
		echo "<th>Cake_Id</th>";
		echo "<th>Cake_Name</th>";
		echo "<th>Cake_Shape</th>";
		echo "<th>Cake_Weight</th>";
		echo "<th>Cake_Flavour</th>";
		echo "<th>Cake_Image</th>";
		echo "<th colspan='2'>Edit \\ Delete</th>";
		if($nr>0)
		{
				
				while($row=mysqli_fetch_assoc($result))
				{				
				echo "<tr>";
					echo "<td>";
						echo $row['c_id'];
					echo "</td>";
					echo "<td>";
						echo $row['c_name'];
					echo "</td>";
					echo "<td>";
						echo $row['c_shape'];
					echo "</td>";
					echo "<td>";
						echo $row['c_weight'];
					echo "</td>";
					echo "<td>";
						echo $row['c_flav'];
					echo "</td>";
					echo "<td>";
						?>
						<img src="<?php echo $row['c_img']; ?>" height="100" width="200">
						<?php
					echo "</td>";
					echo "<td>";
						echo "<a href='editProduct.php?x=$row[c_name]' target='_self'><input type='button' value='EDIT'></a>";
					echo "</td>";
					echo "<td>";
						echo "<a href='deleteProduct.php?x=$row[c_name]' target='_self'><input type='button' value='DELETE'></a>";
					echo "</td>";
				echo "</tr>";
				}
		}
		echo "</table>";
?>