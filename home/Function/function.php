<?php
//检测用户是否登录，判断是否显示登录按钮
function checkLogin()
{
	if(!empty($_SESSION['username']))
	{
		return true;
	}
	else 
	{
		return false;
	}
}