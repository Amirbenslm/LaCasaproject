<?php
include "head.php";

?>

      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>  Tables</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>Rent Table</h4>

                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>First Name</th>
                                  <th>Family Name</th>
                                  <th >Check In</th>
                                  <th >Check Out</th>
                                  <th >Address</th>
                                  <th >Description</th>
                                  <th >ID House</th>
                                  <th >Status</th>
                                  <th >Options</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
$resultat=$mysqli ->query("select * from rent ;");
                            while($donnees = mysqli_fetch_assoc($resultat))
                          {   echo "<tr>";
                              echo "<td>".$donnees['firstname']."</td>";
                              echo "<td>".$donnees['familyname']."</td>";
                              echo "<td>".$donnees['checkin']."</td>";
                              echo "<td>".$donnees['checkout']."</td>";
                              echo "<td>".$donnees['address']."</td>";
                              echo "<td>".$donnees['description']."</td>";
                              echo "<td>".$donnees['idhouse']."</td>";
                              echo "<td>".$donnees['status']."</td>";
                              if($donnees['status']==0)
                              {
                              echo "<td> <a  href=\"acceptrent_house.php?id=".$donnees['id']."\">Accept</a>"."</td>";
                              }
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
