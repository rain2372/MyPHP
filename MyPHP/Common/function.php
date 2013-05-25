<?php
/*
 * 截取字符串
 */
function cutstr($str,$begin=0,$length=250,$charset='utf-8')
{
	return mb_substr($str,$begin,$length,$charset);
}

function equal($first,$second)
{
	if($first == $second)
	{
		return true;
	}
	else 
	{
		return false;
	}
}

function createUrl($c,$a,$v=null)
{
	echo $url = __APP__."?/$c/$a/$v";
}

function getUrl($c,$a,$v=null)
{
	return $url = __APP__."?/$c/$a/$v";
}
function jumpUrl($url)
{
	echo "<script>location.href='$url';</script>";
}

