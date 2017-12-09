<?php
include "header.php";
?>
<div style="margin-top:50px ; margin-bottom: 40px;margin-left:-10px;">
			<div class="container">
				<div class="panel panel-default" style="margin:0 auto;width:1200px;height:530px ">
					<div class="panel-heading">
						<h2 class="panel-title">Personel Informations</h2>
					</div>
					<div class="panel-body">
						<form name="contactform" method="post" action="sell.php" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">First Name</label>
								<div class="col-lg-10">
									<label for="inputName" class="col-lg-2 control-label"><?php echo $_SESSION['first_name']?></label>
								</div>
							</div>
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">Family Name</label>
								<div class="col-lg-10">
									<label for="inputName" class="col-lg-2 control-label"><?php echo $_SESSION['last_name']?></label>
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Address Mail</label>
								<div class="col-lg-10">
									<label for="inputName" class="col-lg-2 control-label"><?php echo $_SESSION['email']?></label>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-2 control-label">Description</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..."></textarea>
								</div>
							</div>
						
							
						</form>

					</div>
				</div>
			</div>
		</div>