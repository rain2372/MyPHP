<?php
class Controller
{
	protected $view;
	
	public function __construct()
	{
		
	}
	
	private function viewinit()
	{
		$this->view = View::init();
	}
	protected function success($message,$url=null)
	{
		echo "<script>alert('$message');</script>";
		if(isset($url))
		{
			jumpUrl($url);
		}
		else 
		{
			echo "<script>history.back();</script>";
		}
	}
	
	protected function error($message,$url=null)
	{
		echo "<script>alert('$message');</script>";
		if(isset($url))
		{
			jumpUrl($url);
		}
		else 
		{
			echo "<script>history.back();</script>";
		}
	}
	
	protected function assign($name,$value)
	{
		$this->viewinit();
		$this->view->assign($name, $value);
	}
	
	protected function display($filename) 
	{
		$this->viewinit();
		$this->view->display($filename);
	}
	
	
	
	
}