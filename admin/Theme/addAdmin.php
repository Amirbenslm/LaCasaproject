<?php
include "head.php";

?>

 <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Add Admin</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      
                          <section id="unseen">
                          	<form method="post" action="addAdmin.php">
                            <table class="table table-bordered table-striped table-condensed">
                            	<tr>
                            		<td>
                     		<label>First Name</label>
                     	</td>
                     	<td>
                     		<input type="text" name="firstname" ></td>
                     	</tr>
                     	<tr>
                            <td>
                     		<label>Family Name</label>
                          </td>
                          <td>
                          <input type="text" name="familyname">
                          </td>
                      </tr>
<tr>
                            		<td>
                     		<label>Login</label>
                     	</td>
                     	<td>
                     		<input type="text" name="login" ></td>
                     	</tr>
                     	<tr>
                            <td>
                     		<label>Password</label>
                          </td>
                          <td>
                          <input type="password" name="password">
                          </td>
                      </tr>

                          </table>
                          <input type="submit" name="submit" value="Add Admin">
                          </form>
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
<?php
if(isset($_POST['submit']))
{
if($mysqli->query("insert into admin (first_name,last_name,login,password) values ('".$_POST['firstname']."','".$_POST['familyname']."','".$_POST['login']."','".$_POST['password']."')"));
{
	//header("Location: admin_table.php");
}	

}
?>