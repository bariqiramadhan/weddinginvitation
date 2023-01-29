<?php
	require_once('lib/adodb5/adodb.inc.php');
	
	$db = &newAdoConnection('mysqli');
	$db_server = 'localhost';
	
	$db_user = 'root';
	$db_password = '';
	$db_database = '';
	
	$db->Connect($db_server, $db_user, $db_password, $db_database);
?>