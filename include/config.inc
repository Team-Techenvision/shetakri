<?php
error_reporting(E_ALL);
ob_start();
session_start();
date_default_timezone_set('Asia/Kolkata');		

//User types
if (!defined('ADMIN')) 	define("ADMIN","S");
if (!defined('USER')) 	define("USER","U");
	


//Table Names
if (!defined('USERS')) 		define('USERS','adminusers');
if (!defined('BANNER')) 	define('BANNER','banner');
if (!defined('PRODUCTSQUANTITY')) 	define('PRODUCTSQUANTITY','quantitydiscount');
if (!defined('ORDERS')) 	define('ORDERS','orders');


//Shortforms
if (!defined('TXDIRECT')) 	define('TXDIRECT',"Kisan");

//Page Titles
define('DASH','DashBoard');
define('PRODUCT','Product');
define('ORDER','Order Management');

define('DOMAIN_NAME','http://'.$_SERVER['SERVER_NAME'].'/kisan');

define('FILE_PATH',$_SERVER['DOCUMENT_ROOT'].'/kisan');
$footer_copyright = '<div>&copy; '.TXDIRECT.'</div>';

$htmlhead = '
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>TexDirect: TTTTTT</title>
<link rel="shortcut icon" type="image/x-icon" href="/images/conversity-favicon-blue.ico">
';
?>