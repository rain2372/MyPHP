<?php
class RegController extends CommonController
{
	public function index()
	{
		$this->getHeader();
		
		$this->assign('titlenow','注册');
		
		$this->getSider();
			
		$this->display('Public/reg');
	}
	
	public function reg()
	{
		$User = M('User');
		$User->uid = '';
		$User->username = $_POST['username'];
		$User->pwd = md5($_POST['password']);
		$User->rpwd = md5($_POST['repassword']);
		if(equal($User->pwd,$User->rpwd))
		{
			$result = $User->add();
			if($result)
			{
				$this->success('注册成功');
			}
			else 
			{
				$this->error('注册失败');
			}
		}
		else 
		{
			echo '密码必须相同';
		}	
	}
}
