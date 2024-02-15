<?php
error_reporting(E_ALL ^ E_NOTICE);
define("IN_SCRIPT", true);

//domain
$domain = $_SERVER['HTTP_HOST'];

//path - DO !NOT! touch .... make sure there is a trailing slash! e.g: google.com/ <<<
$path = '{path}';

//version
$version = '1.0';

//check for installation file
if(is_dir('install')) die('<a href="install/">Install Argoury Suite '. $version .'</a><br/><br/><a href=" " target="_blank">Support for Argoury Suite</a> or alternatively, <a href=" " target="_blank">here</a>');

//basic site configuration
$data['wb_name'] = '{wb_name}';
$data['wb_abbr'] = '{abbr}';
$data['wb_title'] = '{title}';
$data['wb_foot'] = 'This website and its contents are copyright &copy; 1999 - 2011 Jagex Ltd.<br/>
Use of this website is subject to our Terms+Conditions and Privacy policy<br/>Powered by Argoury Suite';
$data['login_time'] = 50000; //SECONDS

//if you change $data['use_recaptcha'] to true, you must specify a private and public keycode
//^^^^^^^^^^^^
$data['use_recaptcha'] = false; //true = use google's recaptcha, false = don't
$data['public_key'] = ''; //public key given to you by google
$data['private_key'] = ''; //private key given to you by google

//database connection settings
$db_host = '{host}';
$db_user = '{user}';
$db_name = '{name}';
$db_password = '{pass}';

//running on localhost?
$localhost = (in_array($_SERVER['HTTP_HOST'], array('localhost', '127.0.0.1'))) ? true : false;
?>