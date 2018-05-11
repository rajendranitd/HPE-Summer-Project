<?php
define('SERVER','localhost');
define('USER','root');
define('DB','nit');
define('PASSWORD','');
function getcon()
{
$con=mysql_connect(SERVER,USER,PASSWORD) or die("error due to". mysql_error());
mysql_select_db(DB,$con);
return $con;
}
?>