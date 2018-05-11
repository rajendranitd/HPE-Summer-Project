<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
if(isset($_POST['update']))
{
include_once('dbcon.php');
$sql="update information set name = '".$_POST['name']."',password='".$_POST['password']."',mobile='".$_POST['mobile']."',gender='".$_POST['gender']."' where email='".$_POST['email']."' ";
$r=mysql_query($sql,getcon());
if($r==true)
header('location:form_update.php');
	
}
?>
<body>
</body>
</html>