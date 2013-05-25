<?php
/*
 * C 获取配置文件配置数据
 */
function C($name,$value=null)
{
	$config = include APP_CONFIG_PATH;
	
	if(array_key_exists($name, $config))
	{
		if($value==null)
		{
			return $config[$name];
		}
		else 
		{
			return $config[$name]=$value;
		}
	}
	else 
	{
		return false;
	}
}


/*
 * 实例化模型类
 */
function M($model)
{
	$table =strtolower($model);		
	$model = $model.'Model';
	return new $model($table);
}

/*
 * 导入扩展
 */
function import($class,$extendPath=EXTEND_PATH)
{
	$classFile = $extendPath.$class.'.php';
	if(file_exists($classFile))
	{
		include_once $classFile;
	}
	else 
	{
		return false;
	}
}