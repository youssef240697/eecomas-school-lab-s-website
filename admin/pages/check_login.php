
<?php
session_start();
define('DOC_ROOT',dirname(__FILE__)); //get the config.php 
$username = $_POST['email']; 
$password = $_POST['password'];
$msg ='';
if(isset($username, $password)) {
    ob_start(); //démarre la temporisation de sortie. 
    include(DOC_ROOT.'/config.php'); 
    // protection
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($dbC, $myusername);
    $mypassword = mysqli_real_escape_string($dbC, $mypassword);
   
	
	$sql="SELECT * FROM admin WHERE email='$myusername' and password=SHA('$mypassword')";
    $result=mysqli_query($dbC, $sql);
	$data = mysqli_fetch_assoc($result);
	
	
	$sql_check = "SELECT * FROM enseignant WHERE email='$myusername'";
	$result_check = mysqli_query($dbC,$sql_check);
	$check = mysqli_fetch_assoc($result_check);
	
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    // si row egal a 1 resultat vrai 
    if($count==1){
        // redirection admin" et info dont on a besoin
		$_SESSION['is_admin'] = $check['is_admin']; // si il est admin
		$_SESSION['prenom'] = $check['prenom'];
		$_SESSION['nom'] = $check['nom'];
		$_SESSION['id'] = $data['id_enseignant'];
        $_SESSION['name']= $myusername;
        header("location:admin.php");
    }
    else {
        $msg = "mot de passe ou email incorrecte";
        header("location:login.php?msg=$msg");
    }
    ob_end_flush();
}
else {
    header("location:login.php?msg=champs vide");
}
?>