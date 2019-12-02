<?php
require_once('config.php');

// session_start();
// print_r($_SESSION['accessToken']);
if ( isset( $_COOKIE['PHPSESSID'] ) ){
    setcookie('PHPSESSID' , "", time()-3600 );
}
session_destroy();


// }

?>

<!-- 
//php
// session_start();
// if (isset($_GET['logout'])) { // logout: destroy token
// 	unset($_SESSION['accessToken']);
// 	$_SESSION = array();
// 	session_destroy();
// 	// die('Logged out.');
// }
/ -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

</head> 
<style>
	body{
  position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
}
</style>

<body>
		<div class="btn white darken-4 col s10 m4">
		
				
				<a href="http://localhost/loginRedirect.php" style="text-transform:none">
				<!-- "profile.php/'.$name.'" -->
					<div class="left">
						<img width="25px" height ="30px" alt="Google &quot;G&quot; Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"/>
					</div>
					&nbsp Sign In
				</a>
				
		   </div>
		  
		   
		   

</body>
</html>