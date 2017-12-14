<?php
include "db.php";

$ResultatMessages=$mysqli->query("select * from messages where road =0");
                              while($DataMessages=mysqli_fetch_assoc($ResultatMessages))
                              {
                              	echo $DataMessages['message'];
                              }        


?>