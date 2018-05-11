<?php
define('SERVER','localhost');
define('USER','root');
define('DB','nit');
define('PASSWORD','');
function getcon()
{
$con=mysqli_connect(SERVER,USER,PASSWORD) or die("error due to". mysqli_connect_error($con));
mysqli_select_db($con,DB);
return $con;
}
?>