<!DOCTYPE html>
<html lang="en">
<head>
	<title>La Casa </title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/responsive.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>

	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="profileactive.php"><img src="../img/logo.png" class="logo" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="buy.php">Buy</a></li>
						<li><a href="rent.php">Rent</a></li>
						<li><a href="sell.php">Sell</a></li>
						<li><a href="contact.php">Contact</a></li>
						
						<li><a href="PersonnelInfos.php"><?php session_start();if(isset($_SESSION['first_name']) && (!empty($_SESSION['first_name'])))
						{

						 echo $_SESSION['first_name']." ".$_SESSION['last_name'] ;} ?> </a></li>					
					</ul>
					
					<a href="../index.html" class="login_btn">Log out</a>
				</nav>
			</div>
		</header><!--  end header section  -->
