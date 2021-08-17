<?php

define('DB_NAME', 'teste');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

if ( !defined('ABSPATH') ){
	define('ABSPATH', dirname(__FILE__) . '/');
}	
if ( !defined('BASEURL') ){
	define('BASEURL', 'crud-bootstrap/');
}
if ( !defined('DBAPI') ){
	define('DBAPI', ABSPATH . 'inc/database.php');
}
?>