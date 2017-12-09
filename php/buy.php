<?php
require 'db.php';
include "header.php";
?>
<div style="margin-top:30px ; margin-bottom: 40px;margin-left:-10px;">
			<div class="container">
				<div class="panel panel-default" style="margin:0 auto;width:1200px;height:630px ">
					<div class="panel-heading">
						<h2 class="panel-title">Purchase Order</h2>
					</div>
					<div class="panel-body">
						<form name="contactform" method="post" action="buy.php" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">First Name</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">Family Name</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputName" name="inputFamilyName" placeholder="Your Family Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Price</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputEmail" name="inpuprice" placeholder="Your Price">
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
									<?php echo "<img src=\"../img/".$_SESSION['image']."\"  style=\"width 30px;height 30px \" />"; 
									?>
									<button type="submit" name="submit" class="btn btn-default">
										Send Message
									</button>
								</div>
							</div>
						</form>

					</div>
					<?php 
                   if (isset($_POST['submit'])) {
	
                    
					?>
					<div class="alert alert-success alert-dismissable">
  <strong>Success!</strong> Indicates a successful or positive action.
</div>
<?php } ?>
				</div>
			</div>
		</div>






<?php
if(isset($_POST['submit']))
{

if($mysqli->query("insert into buying (firstname,familyname,price,description,idhouse) values ('".$_POST['inputName']."','".$_POST['inputFamilyName']."','".$_POST['inpuprice']."','".$_POST['inputMessage']."','m123' )"))
{}	



}
else
{
	echo "String";
}
?>