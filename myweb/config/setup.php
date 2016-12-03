<?php
//Setup File
#Database Connection Here...
$host='localhost';
$user='dev';
$password='';
$database='atomcms';
$port='3306';
$dbc = mysqli_connect($host, $user, $password, $database,$port/*, $socket*/) OR die('Error '.mysqli_connect_error());

#Constants:
DEFINE('D_Template', 'template');
#Functions:
include('functions/data.php');
include('functions/template.php');

$site_title = 'atom 2.0';
if(isset($_GET['page']))
{
	$pageid=$_GET['page'];
}elseif(isset($_GET['logout'])){
	session_unset();
	session_destroy();
	header("Location: login.php");

	exit();
}
else {
	$pageid=1;
}
//page_setup
$page = data_page($dbc, $pageid);
?>