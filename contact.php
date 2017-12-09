<?php
require 'php/phpmailer/mail.php';
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>La Casa </title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="#"><img src="img/logo.png" class="logo" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="#">Buy</a></li>
						<li><a href="#">Rent</a></li>
						<li><a href="#">Sell</a></li>
						<li><a href="#">About</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<a href="php/index.php" class="login_btn">Login</a>
				</nav>
			</div>
		</header><!--  end header section  -->
		<div style="margin-top:30px ; margin-bottom: 40px;margin-left:100px;">
			<div class="container">
				<div class="panel panel-default" style="margin:0 auto;width:500px">
					<div class="panel-heading">
						<h2 class="panel-title">La Casa Contact</h2>
					</div>
					<div class="panel-body">
						<form name="contactform" method="post" action="contact.php" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">Name</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputSubject" class="col-lg-2 control-label">Subject</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-2 control-label">Message</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..."></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" class="btn btn-default">
										Send Message
									</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	<?php 
//include 'footer.php';
if(isset($_POST['inputEmail']))
{
	if(!empty($_POST['inputEmail']))
	{
		$mail = new Mail();
            $mail->setFrom("amirbensalem30@gmail.com");
            $mail->addAddress($_POST['inputEmail']);
            $mail->subject($_POST['inputSubject']);
            $mail->body($_POST['inputMessage']);
             $mail->smtpConnect([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ]);
            $mail->send();	
	}
}
 

	?>
