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
/*
 * 获取单篇文章所有标签
 */
function getTag($tag)
{
	return $tags = explode(',',$tag);
}