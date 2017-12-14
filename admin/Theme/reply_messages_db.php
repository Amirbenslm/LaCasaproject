<?php
session_start();
include "C:/wamp64/www/La Casa/php/db.php";
    if(isset($_POST['submit']))
    {
      $date =date('Y-m-d');
      $name=$_SESSION['nameuser'];
    $resultat=$mysqli->query("insert into replymessages (name,date,message,id_user,id_admin) values ('".$name."','".$date."','".$_POST['inputMessage']."',".$_SESSION['iduser'].",".$_SESSION['idadmin'].")");
     if($resultat)
     {
      
      header("location: Allmessages.php");

    }    
    }