// JavaScript Document
function check()
{
	if(document.getElementById("name").value=="")
	{
	alert("name field is Empty");
	return false;
	}
	if(document.getElementById("email").value=="")
	{
	alert("Email field is Empty");
	return false;
	}
	if(document.getElementById("password").value=="")
	{
	alert("password field is Empty");
	return false;
	}
	if(document.getElementById("address").value=="")
	{
	alert("address field is Empty");
	return false;
	}
}