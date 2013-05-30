<?php
class App
{
	static public function run()
	{
		session_start();	//开启session
		try
		{
			$dispatcher = new Dispatcher();
		}
		catch(UrlException $e)
		{
			echo '您访问的页面不存在！';
		}
	}
}