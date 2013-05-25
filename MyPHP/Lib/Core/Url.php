<?php
class Url
{
	static function getUrl()
	{
		if(!empty($_SERVER['QUERY_STRING']))
		{
			return $_SERVER['QUERY_STRING'];
		}
		else 
		{
			return "/Index/index";
		}		
	}
	
	static public function getUrlArray()
	{
		return explode('/',Url::getUrl());
	}
	
	//获取主机名
	static public function getHostName()
	{
		return $_SERVER['SERVER_NAME'];
	}
	
	//获取执行脚本名
	static public function getScriptName()
	{
		return $_SERVER['SCRIPT_NAME'];
	}
	
}