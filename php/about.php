<?php
include 'header.php';


?>
<style type="text/css">
	body{
		background: url('../img/background.jpg') no-repeat;
	}
</style>

<section class="listings" style="margin-top: -80px;">
		<div class="wrapper">
			<ul class="properties_list">
				<li>
					
<?php $_SESSION['image']=$_GET['image']; echo "<img src=\"../img/".$_GET['image']."\"  class=\"property_img\"/>"; 
$str = str_replace("1", "2", $_GET['image']);
?>
					
					
					<div class="property_details">
						<h1>
							<a href="#">Living room</a>
						</h1>
						</div>
				</li>
				<li>
					
						<?php echo "<img src=\"../img/".$str."\"  class=\"property_img\"/>"; 
  $str = str_replace("2", "3", $str);                      
?>
					
					
					<div class="property_details">
						<h1>
							<a href="">eating room</a>
						</h1>
						</div>
				</li>
				<li>
					
						<?php echo "<img src=\"../img/".$str."\"  class=\"property_img\"/>"; 
                        
?>
					
					
					<div class="property_details">
						<h1>
							<a href="" >garden -Swwiming pool</a>
						</h1>
						
					</div>
				</li>
	</ul>
			
				<div style="margin-left: 400px;">

					<a href="buy.php" class="btn">Buy</a>
					
		<a href="rent.php" class="btn">Rent</a>	
		</div>
		<

		</div>
		
	</section>
	<style type="text/css">
		.btn {
			
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 25px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
	</style>