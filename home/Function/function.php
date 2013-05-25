<?php
//检测用户是否登录，判断是否显示登录按钮
function checkLogin()
{
	if(empty($_SESSION['username']))
	{
		echo "<a href=".__APP__."?/Login/index>登录</a>";
	}
	else 
	{
		echo "<a href=".__APP__."?/Login/out>退出</a>";
	}
}