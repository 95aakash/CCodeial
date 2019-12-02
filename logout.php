<?php
// include('config.php');
include('env.php');
session_start();

echo 'Logged Out';


//remove PHPSESSID from browser
if ( isset( $_COOKIE['PHPSESSID'] ) ){
    setcookie('PHPSESSID' , "", time()-3600, "/" );
}

//clear session from globals
$_SESSION = array();
//clear session from disk
session_destroy();


// redirect page to index.php
header("location: {$pathValue}/login.php");



?>