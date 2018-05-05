<?php
if(isset($_SESSION['name'])){ //if session enregistre
header("location:admin.php"); // Redirect to login.php page
}
else{
header("location:login.php"); // Redirect to login.php page
}
?>
