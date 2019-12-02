<?php
include('env.php');
require_once('google-api/vendor/autoload.php');

$client = new Google_Client();
$client->setAuthConfig('creds.json');


$currentCookieParams = session_get_cookie_params();

// $rootDomain = '.example.com';
$path = '/';

session_set_cookie_params(
    // $currentCookieParams["lifetime"],
    $currentCookieParams["path"],
    // $rootDomain,
    $currentCookieParams["secure"],
    $currentCookieParams["httponly"]
);

// session_name('IMrep');
session_start();

// switch($_SERVER["HTTP_HOST"]){
// 	case "localhost":
// 	   define('ENVIRONMENT', 'development');
// 	break;
// 	default:
// 	   define('ENVIRONMENT', 'production');
// 	break;
// 	}
   
// 	echo ENVIRONMENT ;  




$client->addScope(Google_Service_Oauth2::USERINFO_EMAIL);
$redirectURI = "{$pathValue}/callback2.php";
$client->setRedirectUri($redirectURI);
session_start();

?>