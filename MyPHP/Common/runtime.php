<?php
/*
 * 运行时文件
 */
//加载默认配置文件
include_once MYPHP_PATH.'Config/config.php';

//项目配置文件
include_once APP_PATH.'/Config/config.php';

//加载通用函数
include_once MYPHP_PATH.'/Common/common.php';

//加载核心函数
include_once MYPHP_PATH.'/Common/function.php';

//加载项目自定义函数
include_once APP_PATH.'/Function/function.php';

//动态加载文件
include_once MYPHP_PATH.'/Common/autoload.php';


//定义网站根目录
define('ROOT', C('ROOT'));

//公共文件路径
define('PUBLIC_PATH', ROOT.C('PUBLIC_PATH'));

//定义当前项目根目录，不含域名
define('__APP__', Url::getScriptName());
App::run();