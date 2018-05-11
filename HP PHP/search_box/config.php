<?php

$SETTINGS["hostname"]='localhost';
$SETTINGS["mysql_user"]='root';
$SETTINGS["mysql_pass"]='';
$SETTINGS["mysql_database"]='database';
$SETTINGS["data_table"]='data'; 

if (!isset($install) or $install != '1') {
	$connection = mysql_connect($SETTINGS["hostname"], $SETTINGS["mysql_user"], $SETTINGS["mysql_pass"]) ;
	$db = mysql_select_db($SETTINGS["mysql_database"], $connection) ;
}
?>