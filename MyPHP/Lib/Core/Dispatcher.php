<?php
class Dispatcher
{
	private $controller;
	private $action;
	private $number;
	private $urlArray;
	
	public function __construct()
	{
		$this->getUrlArray();
		$this->controller = $this->getController().'Controller';
		$this->action = $this->getAction();
		$this->number = $this->getValue();
		
		//检测控制器与方法是否存在
		$result = method_exists($this->controller, $this->action);
		
		if($result)
		{
			$controller = new $this->controller();
			$action=$this->action;
			$controller->$action($this->number);
		}
		else 
		{
			throw new Exception("页面访问出错");
		}
	}
	

	public function getController()
	{
		return $this->urlArray[1];
	}
	
	public function getAction()
	{
		if(isset($this->urlArray[2]))
		{
			return $this->urlArray[2];
		}
		else 
		{
			return DEFAULT_ACTION;		//如果未指定动作，则返回默认动作（Action)
		}	
	}
	
	public function getValue()
	{
		if(isset($this->urlArray[3]))
		{
			return $this->urlArray[3];
		}
		else 
		{
			return null;
		}
		
	}
	
	public function getUrlArray()
	{
		return $this->urlArray = Url::getUrlArray();
	}
}