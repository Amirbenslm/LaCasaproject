<?php
include "C:/wamp64/www/La Casa/php/db.php";
if(isset($_GET['id']))
{
	
$mysqli->query("delete from  messages where id=".$_GET['id']);
	header("location:Allmessages.php");
}
