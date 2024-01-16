<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<?php
				session_start();
				if(!(isset($_SESSION["a_name"])))
				{
					echo $_SESSION["a_name"];
					header('location:admin_login.html');
				}
		?>
				<h1 align="center">!! Admin_Side !!</h1>
				<table align="center" >
				<tr>
					<td><a href="insertProduct1.php"><input type="button" value="insertProduct"></a></td>
					<td><a href="viewProduct.php"><input type="button" value="viewProduct"></a></td>
				</tr>
				</table>
	</body>
</html>