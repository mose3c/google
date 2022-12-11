<?php

$dbname = "mars"; 							//Database name
$dbuser = "root";							//Database login
$dbpwd 	= "moh123321moh";							//Database password
$GLOBALS['logspath']     = "logs";		    //Logs folder
$GLOBALS['domain']       = "oceanofcheats.com";		//Domain name for loader
$GLOBALS['panel_folder'] = "panel";			//Panel folder
$GLOBALS['pwd_file'] = "$2y$10$.pkMUQcfaEphaPPdbL8AyOXgNP3scoYM5vuan70zzWwmotLKbg8zW";	



//Database connect
require_once $GLOBALS['panel_folder'].'/includes/rb.php';
R::setup( 'mysql:host=localhost;dbname='.$dbname, $dbuser, $dbpwd );
session_start();

?>