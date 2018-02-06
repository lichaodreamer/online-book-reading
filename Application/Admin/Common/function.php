<?php
function isLogin()
{
	if(!isset($_SESSION['username'])||$_SESSION['username']=='')
	{
		return false;
	}
	else
	{
		return true;
	}
}
function isSuperLogin()
{
	if(!isset($_SESSION['aname'])||$_SESSION['aname']=='')
	{
		return false;
	}
	else
	{
		return true;
	}
}
?>