<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo  isset($titlenow)?$titlenow.'——':'';?><?php echo $title ?></title>
<link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>style/style.css">

<link href="<?php echo PUBLIC_PATH ?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<script src="<?php echo PUBLIC_PATH ?>Jquery/jquery-1.9.1.min.js"></script>
<script src="<?php echo PUBLIC_PATH ?>js/my.js"></script>
</head>
<body>
<div id="header" class="row-fluid page-header">
	<div id="logo" class="span9">
    	<h1><a href="<?php echo __APP__;?>"><?php echo $title;?></a><small>a simple blog</small></h1>
    </div>
    <div id="admin" class="span3">
    	<ul class="nav nav-pills">
    		<li class="home login"><a href="#Login" title="登录"><i class="icon-user"></i></a></li>
 			<li class="home"><a href="mailto:imaguowei@gmail.com" title="联系我"><i class="icon-envelope"></i></a></li>
 			<li class="admin setting"><a href="#setting" title="设置"><i class="icon-user"></i></a></li>
 			<li class="admin"><a href="<?php createUrl('Login','out')?>" title="退出"><i class="icon-off"></i></a></li>
    	</ul>
    </div>
</div>
