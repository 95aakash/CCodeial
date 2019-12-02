<?php
include('env.php');
require_once('config.php');


if (isset($_GET['logout'])) { // logout: destroy token
    unset($_SESSION['accessToken']);
	die('Logged out.');
}
// if(session_status() == PHP_SESSION_ACTIVE)
// {
//     session_regenerate_id();
// }


if (isset($_GET['code'])) { // we received the positive auth callback, get the token and store it in session
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    // $client->setAccessToken($token['access_token']);
   
   
    // $client->authenticate();
    $_SESSION['accessToken'] = $client->getAccessToken();
}

if (isset($_SESSION['token'])) { // extract token from session and configure client
    $token = $_SESSION['accessToken'];
    $client->setAccessToken($token);
}

if (!$client->getAccessToken()) { // auth call to google
    // $authUrl = $client->createAuthUrl();
    // header("Location: ".$authUrl);
    header("Location: {$pathValue}/login.php");
    // exit();
}
$google_oauth = new Google_Service_Oauth2($client);

$datas = $google_oauth->userinfo->get();

$emailid= $datas['email'];


if (strpos($emailid, '@indiamart.com') === false) {
    echo 'true';
    header("Location: {$pathValue}/login.php");
 
}else{
    header("Location: {$pathValue}/extentReport-index.php");
}
exit();
?>