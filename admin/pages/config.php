
<?php
/**********************************************************************
 
 *dbHost = localhost
 *dbUser = Username
 *dbPass = Password
 *dbName = Name db
 **********************************************************************/
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'eecomas';
$dbC = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
        or die('Error Connecting to MySQL DataBase');
?>