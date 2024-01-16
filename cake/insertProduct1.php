<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<?php
				session_start();
				include 'dbcon.php';
				if(!(isset($_SESSION["a_name"])))
				{
					header('location:admin_login.html');
				}
		?>
		<h1 align="center">!! Product_Details !!</h1>
		<table align="center" >
		<form action="insertProduct.php" method="post" enctype="multipart/form-data">
		 	 <tr>
				<td><label>Cake_Name</label></td>
				<td><label>:</label></td>
				<td><input type="text" name="c1"></td>
		   	 </tr>
		 	 <tr>
				<td><label>Cake_Shape</label></td>
				<td><label>:</label></td>
				<td><input type="text" name="cs1"></td>
			 </tr>
			 <tr>
				<td><label>Cake_weight</label></td>
				<td><label>:</label></td>
				<td><input type="text" name="cw1"></td>
			 </tr>
			 <tr>
				<td><label>Cake_flav</label></td>
				<td><label>:</label></td>
				<td><input type="text" name="cf1"></td>
			 </tr>
			 <tr>
				<td><label>Cake_img</label></td>
				<td><label>:</label></td>
				<td><input type="file" name="img1"></td>
			 </tr>
			 <tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Insert_Product"></td>
			 </tr>
		</form>
		</table>
	</body>
</html>