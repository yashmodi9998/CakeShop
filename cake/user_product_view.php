<?php
	include 'header.php';
	$con = mysqli_connect("localhost","root","","cake_shop");
	if(!$con)
	{
		echo "Error".mysqli_connect_error();
	}
?>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="owl.carousel.js"></script>
<link rel="stylesheet" type="text/css" href="owl.theme.default.css"/>
<link rel="stylesheet" type="text/css" href="owl.theme.green.css"/>
<link rel="stylesheet" type="text/css" href="owl.carousel.css"/>
<div class="owl-carousel" id="cake">
<style>
.div1{
	overflow:hidden;
}
</style>
<?php
include 'dbcon.php';
	$sql="select * from product_details";
	$result=mysqli_query($con,$sql);
	$nr=mysqli_num_rows($result);
	if($nr>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{			
?>
			<div>
		
				<div class="product_image">
					<img src='<?php echo $row["c_img"];  ?>' height='100' width='200' "/>
				</div>
				<div class="product_name">
					<?php echo $row["c_name"] ?>
				</div>
				<div class="product_shape">
					<?php echo $row["c_shape"] ?>
				</div>		<a href="cart.php?pid=<?php echo $row['c_id']?>" >add to cart</a>
			</div>
<?php
		}
	}
?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#cake").owlCarousel();
	});
</script>-