<?php
if(isset($_POST['ok']))
{
include_once('dbcon.php');	
$sql="insert into information values('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['mobile']."','".$_POST['gender']."')";

$r=mysqli_query(getcon(),$sql);
if($r==true)
header('location:start.php');
	
}
?>