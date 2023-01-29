
<?php
error_reporting(0);

date_default_timezone_set('Asia/Jakarta');

define('SMARTY_DIR',str_replace("\\","/",getcwd()).'/lib/smarty-3.1.33/');
require (SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
$smarty->debugging = false;

require_once('_database.php');

$base_url = 'https://weddinginvitation.github.io/';
$smarty->assign('base_url', $base_url);



function cleanurl($str, $replace=array(), $delimiter='-'){
	if( !empty($replace) ) {
		$str = str_replace((array)$replace, ' ', $str);
	}
	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
	$clean = str_replace("&amp;", '', $clean);
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

    return $clean;
}

?>