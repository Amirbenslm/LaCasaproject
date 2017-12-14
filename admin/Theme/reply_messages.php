<?php
session_start();
include "head.php";
if($_GET['iduser'])
{
$_SESSION['iduser']=$_GET['iduser'];
$_SESSION['nameuser']=$_GET['name'];
$_SESSION['message']=$_GET['message'];
$_SESSION['idadmin']=$_GET['idadmin'];
$mysqli->query("update messages set road =1 where id=".$_GET['idmessage']);
}
?>

      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Reply</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>  <?php echo " ".$_SESSION['nameuser'] ?></h4>
                      <form action="reply_messages_db.php" method="post">
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                            
                                  <tr>
                         <div class="form-group"><br><br>
                     <label for="inputPassword1" class="col-lg-2 control-label">Message :</label>
                      <?php
 								
                        
                              echo "".$_SESSION['message']."<br><br>";?>
                        </div> 
                                  </tr>
                              <tr>    
                               <div class="col-lg-10">
                       <textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..." ></textarea>
                        </div>   
                              </tr>
                              </thead>
                              <tbody>
                               
                              
                              </tbody>
                          </table>
                          </section>
                          <center>
                                  <input type="submit" name="submit" value="    Reply         ">
                                  </center>
                      </form>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  	
		  	

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    

  </body>
</html>
 