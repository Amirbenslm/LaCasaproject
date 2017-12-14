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
          	<h3><i class="fa fa-angle-right"></i>  Tables</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>Users Table</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                <th>ID user</th>
                                  <th>First Name</th>
                                  <th>Family Name</th>
                                  <th >email</th>
                                  <th >password</th>
                                  <th>hash</th>
                                  <th>Options</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                                <?php
$resultat=$mysqli ->query("select * from users ;");
                            while($donnees = mysqli_fetch_assoc($resultat))
                          {   echo "<tr>";
                        echo "<td>".$donnees['id']."</td>";
                              echo "<td>".$donnees['first_name']."</td>";
                              echo "<td>".$donnees['last_name']."</td>";
                              echo "<td>".$donnees['email']."</td>";
                              echo "<td>".$donnees['password']."</td>";
                              echo "<td>".$donnees['hash']."</td>";
                              echo "<td> <a  href=\"supprimer_users.php?id=".$donnees['id']."\">Supprimer</a>"."</td>";
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
