<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo  isset($titlenow)?$titlenow.'——':'';?><?php echo $title ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH;?>bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH;?>style/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo PUBLIC_PATH;?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<script src="<?php echo PUBLIC_PATH;?>Jquery/jquery-1.9.1.min.js"></script>
<script src="<?php echo PUBLIC_PATH;?>bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<div id="header" class="row-fluid">
	<div id="logo" class="span8">
    	<h1><a href="<?php echo __APP__;?>"><?php echo $title;?></a><small>a simple blog</small></h1>
    </div>
    <div class="span4">
    	<button class="btn"><?php checkLogin();?></button>
    </div>
</div>

