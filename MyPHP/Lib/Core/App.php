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
		catch(Exception $e)
		{
			echo '您访问的页面不存在！';
		}
	}
}