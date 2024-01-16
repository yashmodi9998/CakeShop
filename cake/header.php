<?php
		session_start();
		?>
		<head>
			<style>
				*
				{
					margin : 0px;
					padding : 0px;
				}
				.div1 h3
				{
					float : left;
					text-align: center;
					width : 33.33%;
				}
				
			</style>
		</head>
		<div class="div1">
			<h3>Contact Us</h3>
			<h3>LOGO</h3>
			<h3>
			<?php
				if(isset($_SESSION["u_name"]))
				{
					echo "Welcome".$_SESSION["u_name"]." ";
					?><a href="logout.php">LOGOUT</a><?php
				}
				else
				{
						?><a href="login.html">Login</a><?php
				}?>
			</h3>
		</div>