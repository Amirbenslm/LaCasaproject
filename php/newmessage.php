<?php
include "header.php";
require 'db.php';
?>
<div style="margin-top:50px ; margin-bottom: 40px;margin-left:-10px;">
			<div class="container">
				<div class="panel panel-default" style="margin:0 auto;width:1200px;height:448px ">
					<div class="panel-heading">
						<h2 class="panel-title">Messages  :  <a href="messages.php">All Messages</a></h2>
					</div>
					 <section id="main-content">
          <section class="wrapper">
          	
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                     
                          <form action="newmessage.php" method="post">
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf" >
                                  <thead class="cf" >

                                  <tr>
                         <div class="form-group">
                     <label for="inputPassword1" class="col-lg-2 control-label">Message</label>
                     <div class="col-lg-10">
                       <textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..." ></textarea>
                        </div>
                        </div> 
                                  </tr>
                                  </thead>
                                  <tbody>
                                      </tbody>
                              </table>
                                  <br><br>
                                  
                                  <center>
                                  <input type="submit" name="submit" value="Send Message">
                                  </center>
                                </form>
                                  
                              
                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section>
    <?php
    if(isset($_POST['submit']))
    {
      $date =date('Y-m-d');
      $name=$_SESSION["first_name"].$_SESSION['last_name'];
    $resultat=$mysqli->query("insert into messages (name,date,message,id_user) values ('".$name."','".$date."','".$_POST['inputMessage']."',".$_SESSION['id'].")");
     if($resultat)
     {
      ?><br><br><br><br><br><br><br><br>
      <div class="alert alert-success alert-dismissable">
  <strong>Success!</strong> Your Message has been sent</div>
<?php   
      }    
    }
     
           
                           ?>