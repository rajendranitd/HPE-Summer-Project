<?php
include('login.php');
if(isset($_SESSION['login_user'])){
	
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1></h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="Enter Username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder=" Password" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>