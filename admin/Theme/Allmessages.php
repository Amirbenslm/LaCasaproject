<?php
include "head.php";

?>

      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>All Messages</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i></h4>
                      
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                              
                                <th >From</th>
                                  <th>Date</th>
                                  <th>Message</th>
                                  <th>Options</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                                <?php
$resultat=$mysqli ->query("select * from messages ;");
                            while($donnees = mysqli_fetch_assoc($resultat))
                          {   echo "<tr>";
                        
                              echo "<td>".$donnees['name']."</td>";
                              echo "<td>".$donnees['date']."</td>";
                              echo "<td>".$donnees['message']."</td>";
                              echo "<td> <a  href=\"reply_messages.php?idadmin=1&amp;idmessage=".$donnees['id']."&amp;iduser=".$donnees['id_user']."&amp;name=".$donnees['name']."&amp;message=".$donnees['message']."&amp;date=".$donnees['date']."\">Reply</a> || <a  href=\"supprimer_Messages.php?id=".$donnees['id']."\">Delete</a>"."</td>";
                              echo "</tr>";
                          }

                             
                                ?>
                              
                              </tbody>
                          </table>
                          </section>
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
