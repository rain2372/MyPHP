<?php
/*
 * MyPHP核心配置文件
 */

//核心类文件路径
define('CORE_PATH', MYPHP_PATH.'Lib/Core/');

//定义扩展类目录
define('EXTEND_PATH', MYPHP_PATH.'Lib/Extend/');

//项目配置文件路径
define('APP_CONFIG_PATH',APP_PATH.'Config/config.php');

//项目控制器路径
define('APP_CONTROLLER_PATH' ,APP_PATH.'Lib/Controller/');

//项目模型类路径
define('APP_MODEL_PATH', APP_PATH.'Lib/Model/');

//项目模板文件路径
define('APP_VIEW_PATH' ,APP_PATH.'Lib/View/');

//默认控制器
define('DEFAULT_CONTROLLER', 'Index');
//默认方法
define('DEFAULT_ACTION', 'index');