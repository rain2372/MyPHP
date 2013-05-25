<?php
class LoginController extends CommonController
{
	public function index()
	{
		$this->getHeader();
		
		$this->assign('titlenow','登陆');
	
		$this->getSider();
			
		$this->display('Public/login.php');
	}
	
	public function login()
	{
		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		
		$User = M('User');
		$user = $User->find("`username` = '{$data['username']}'");
		
		if($user['password'] == $data['password'])
		{
			$_SESSION['uid'] = $user['uid'];
			$_SESSION['username'] = $data['username'];
			$_SESSION['password'] = $data['password'];
			
			if($_SESSION['username'])
			{
				$this->success('登录成功',getUrl('Index','index'));
			}
			else 
			{
				$this->error('登录失败');
			}
		}
		else 
		{
			$this->error('用户名或密码错误');
		}
		
		
		
	}
	
	public function out()
	{
		$_SESSION['username'] = null;
		$_SESSION['password'] = null;
		
		$this->success('退出成功',ROOT);
	}
}