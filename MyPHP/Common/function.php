<?php
/*
 * 截取字符串
 */
function cutstr($str,$begin=0,$length=250,$charset='utf-8')
{
	return mb_substr($str,$begin,$length,$charset);
}

/*
 * 比较两个值是否相等
 */
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

/*
 * 自动生成url地址，并直接打印输出
 */
function createUrl($c,$a,$v=null)
{
	echo $url = __APP__."?/$c/$a/$v";
}

/*
 * 自动生成url地址，不打印输出
 */
function getUrl($c,$a,$v=null)
{
	return $url = __APP__."?/$c/$a/$v";
}

/*
 * 链接跳转
 */
function jumpUrl($url)
{
	echo "<script>location.href='$url';</script>";
}

