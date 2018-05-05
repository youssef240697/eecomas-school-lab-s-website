<?php
session_start(); //Start the session
define('ADMIN',$_SESSION['name']); //Get the user name from the previously registered super global variable
if(!isset($_SESSION['name'])){ //If session not registered
header("location:login.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
?>
<?php
session_start(); 
session_destroy(); 
header("location:login.php?msg=déconnecté avec succès"); 
?>