<?php
include "head.php";
?>


      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>  Tables</h3>
          <div class="row mt">
            <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>Buying Table</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                       <th>First Name</th>
                                  <th>Family Name</th>
                                  <th >Price</th>
                                  <th >Description</th>
                                  <th >ID House</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                 <?php

                                 $resultatbuy=$mysqli->query("select * from buying");
                            while($donnees = mysqli_fetch_assoc($resultatbuy))
                          {   echo "<tr>";
                              echo "<td>".$donnees['firstname']."</td>";
                              echo ".<td>".$donnees['familyname']."</td>";
                              echo ".<td>".$donnees['price']."</td>";
                              echo ".<td>".$donnees['description']."</td>";
                              echo "<td>".$donnees['idhouse']."</td>";
                              echo "</tr>";
                          } ?>
                                  
                                  </tbody>
                              </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->     
        </div><!-- /row -->
        
        

    </section>
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


?>
