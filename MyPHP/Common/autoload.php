<?php
/*
 * 动态加载加载核心类文件
 */
function core_autoload($class)
{
	$filename = CORE_PATH.$class.'.php';
	if(file_exists($filename))
	{
		include_once $filename;
	}
}
spl_autoload_register('core_autoload');

//自动加载异常扩展类
function exception_autoload($class)
{
	$filename = EXCEPTION_PATH.$class.'.php';
	if(file_exists($filename))
	{
		include_once $filename;
	}
}
spl_autoload_register('exception_autoload');

//注册自动加载项目控制器文件
function app_control_autoload($class)
{
	$filename = APP_CONTROLLER_PATH.$class.'.php';
	if(file_exists($filename))
	{
		include_once $filename;
	}
}
spl_autoload_register('app_control_autoload');

//自动加载项目模型类文件
function app_model_autoload($class)
{
	$filename = APP_MODEL_PATH.$class.'.php';
	if(file_exists($filename))
	{
		include_once $filename;
	}
}
spl_autoload_register('app_model_autoload');


