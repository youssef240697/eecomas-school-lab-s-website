<?php
session_start(); //Start the session
define('ADMIN',$_SESSION['name']); //Get the user name from the previously registered super global variable
if(!isset($_SESSION['name'])){ //If session not registered and mashi admin
header("location:login.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
?>
<?php

if(isset($_POST['submit'])){
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$objet = $_POST['objet'];
	$message = $_POST['message'];
	
	include('config.php');
	$sql = "insert into message(nom,email,objet,message) VALUES('$nom','$email','$objet','$message')";
	$resultat = mysqli_query($dbC,$sql);
	if($resultat) header("Location: ../../contact.php?succes=succes");
	else header("Location: ../../contact.php?erreur=erreur");
}

?>