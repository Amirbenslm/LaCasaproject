<?php
include "header.php";
require 'db.php';
?>
<div style="margin-top:50px ; margin-bottom: 40px;margin-left:-10px;">
			<div class="container">
				<div class="panel panel-default" style="margin:0 auto;width:1200px;height:530px ">
					<div class="panel-heading">
						<h2 class="panel-title">Messages  :  <a href="newmessage.php">New message</a></h2>
					</div>
					 <section id="main-content">
          <section class="wrapper">
          	
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                     
                          
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                       <th>Numero</th>
                                  <th>Date</th>
                                  <th >Message</th>
                                  <th >Options</th> 
                                  </tr>

                                  </thead>
                                  <tbody>
                              	 <?php

                                 $resultatbuy=$mysqli->query("select * from replymessages where road=0 and id_user=".$_SESSION['id']);
                            while($donnees = mysqli_fetch_assoc($resultatbuy))
                          {   echo "<tr>";
                              echo "<th>".$donnees['id']."</th>";
                              echo "<td>".$donnees['date']."</td>";
                              echo "<td>".$donnees['message']."</td>";
                              echo "<td><a href=\"replyuser_messages.php?idadmin=1&amp;idmessage=".$donnees['id']."&amp;iduser=".$donnees['id_user']."&amp;name=".$donnees['name']."&amp;message=".$donnees['message']."&amp;date=".$donnees['date']."\">Reply</a> || <a  href=\"supprimer_Messages.php?id=".$donnees['id']."\">Delete</a></td>";
                              echo "</tr>";
                          }?>
                                  
                                  </tbody>
                              </table>
                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section>

					
			