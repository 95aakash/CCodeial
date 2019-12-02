<?php
include('env.php');
session_start();
// print_r($_SESSION['accessToken']);
if(!isset($_SESSION['accessToken'])){
   header('HTTP/1.1 403 Forbidden');
   echo 'Unauthorised';
   header("Location: {$pathValue}/login.php");

	exit();
	
}

?>