
<?php

	session_start();
	require_once(__DIR__.'/_header.php');
	//require_once('_database.php');
				
	$expl = explode("/", strtolower($_SERVER["REQUEST_URI"]));
	$flag = 0;

	//session_start();

	$module = $_GET['module'];
	$url1 = $expl[$flag+2];
	$url2 = $expl[$flag+3];
	$url3 = $expl[$flag+4];
	$url4 = $expl[$flag+5];
	if(!isset($module)) $module = $expl[$flag+1];
	if(!isset($module)) $module = '';
	$smarty->assign('module', $module);
	$smarty->assign('url1', $url1);
	$smarty->assign('url2', $url2);
	$smarty->assign('url3', $url3);
	$smarty->assign('url4', $url4);


	if($module == '') include('_index.php');
	
	
	else{
		include('_index.php');
		//$smarty->display('_error.tpl');
	}
	
?>