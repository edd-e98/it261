<?php 
session_start();
include('config.php');

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die (myError(__FILE__,__LINE__,mysqli_connect_error()));
$query = "SELECT * FROM users";
echo (mysqli_query($iConn, $query));

$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

?>