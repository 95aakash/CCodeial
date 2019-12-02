<?php
switch($_SERVER["HTTP_HOST"]){
	case "localhost":
       define('ENVIRONMENT', 'development');
       $pathValue = 'http://localhost';
    break;
    case "dev-report.intermesh.net":
        define('ENVIRONMENT','dev');
        $pathValue = 'http://dev-report.intermesh.net';
    break;
	default:
       define('ENVIRONMENT', 'production');
       $pathValue = 'http://report.intermesh.net';
	break;
	}
   
    // echo ENVIRONMENT ;
    // echo $pathValue;
 

?>  
