<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
table
{
	background-color:#0F3;
	text-align:justify;
	margin-top:100px;
}
</style>
</head>

<body bgcolor="#CCFF00">
<form action="update.php" method="post">
<table align="center" cellpadding="6px" cellspacing="6px">
<tr>
<th>name</th>
<td><input type="text" name="name" id="name"/></td>
</tr>

<tr>
<th>email</th>
<td><input type="email" name="email" id="email"/></td>
</tr>
<tr>
<th>password</th>
<td><input type="text" name="password" id="password" /></td>
</tr>
<tr>
<th>mobile number</th>
<td><input type="text" name="mobile" id="mobile number" /></td>
</tr>
<tr>
<th>gender</th>
<td>Male<input type="radio" name="gender" id="gender" value="male" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Female<input type="radio" name="gender" id="gender" value="female"/>
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="click" name="update"/></td>
</tr>
</table>
</form>
</body>
</html>