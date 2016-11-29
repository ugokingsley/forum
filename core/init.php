<?php
//start sessions
session_start();
//include configuration
require_once('config/config.php');
//helper function file
require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');
//autoload class
function __autoload($class_name){
	require_once('libraries/'.$class_name.'.php');
}

?>