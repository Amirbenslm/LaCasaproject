<?php
include "C:/wamp64/www/La Casa/php/db.php";
if(isset($_GET['id']))
{
	
$mysqli->query("delete from  users where id=".$_GET['id']);
	header("location:simple_users.php");
}
if(isset($_GET['idadmin']))
{
	
$mysqli->query("delete from  admin where id=".$_GET['idadmin']);
	header("location:admin_table.php");
}