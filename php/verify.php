<?php 
/* Verifies registered user email, the link to this page
   is included in the register.php email message 
*/
require 'db.php';
session_start();

// Make sure email and hash variables aren't empty
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
{   
    echo $_GET['email'];
    /*$email = $mysqli->escape_string($_GET['email']); 
    $hash = $mysqli->escape_string($_GET['hash']);*/ 
    $email = $_GET['email']; 
    $hash = $_GET['hash']; 
      $result = $mysqli->query("SELECT * FROM users WHERE email=$email AND hash=$hash AND active=0");
    // Select user with matching email and hash, who hasn't verified their account yet (active = 0)
   // $result = $mysqli->query("SELECT * FROM users WHERE email =$email AND hash =$hash\' AND active=0");
echo "SELECT * FROM users WHERE email='$email' AND hash='$hash' AND active='0'";
    if ( $result['active']!=0 )
    { 
        $_SESSION['message'] = "Account has already been activated or the URL is invalid!";

        header("location: error.php");
    }
    else {
        $_SESSION['message'] = "Your account has been activated!";
        
        // Set the user status to active (active = 1)
        $mysqli->query("UPDATE users SET active='1' WHERE email=$email") or die($mysqli->error);
        echo "UPDATE users SET active='1' WHERE email='$email'";
        $_SESSION['active'] = 1;
        
        header("location: success.php");
    }
}
else {
    $_SESSION['message'] = "Invalid parameters provided for account verification!";
    header("location: error.php");
}     
?>