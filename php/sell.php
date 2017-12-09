<?php
include "db.php";
include "header.php";
?>

<div style="margin-top:50px ; margin-bottom: 40px;margin-left:-10px;">
			<div class="container">
				<div class="panel panel-default" style="margin:0 auto;width:1200px;height:530px ">
					<div class="panel-heading">
						<h2 class="panel-title">Sell Order</h2>
					</div>
					<div class="panel-body">
		<form name="contactform" method="post" action="sell.php" class="form-horizontal" role="form" enctype="multipart/form-data">
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
								<label for="inputEmail1" class="col-lg-2 control-label">Address</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Your Address">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-2 control-label">Description</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..."></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<input type="file" id="fileToUpload" name="monfichier" accept=".jpg, .jpeg, .png" >
										
									
								</div>
							</div><br><br>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									
									<button type="submit" name="submit" class="btn btn-default">
										ADD House
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
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                       // echo "L'envoi a bien été effectué !";
                }
        }
$mysqli->query("insert into selling (firstname,familyname,price,address,description,image ) values ('".$_POST['inputName']."','".$_POST['inputFamilyName']."','".$_POST['inpuprice']."','".$_POST['inputAddress']."','".$_POST['inputMessage']."','uploads/".basename($_FILES['monfichier']['name'])."')");

}

?>