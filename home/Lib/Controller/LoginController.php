<?php
class LoginController extends CommonController
{
	public function index()
	{
		$this->display('Public/login.php');
	}
	
	public function login()
	{
		$User = M('User');
		
		$User->username = $_POST['username'];
		$User->pwd = md5($_POST['password']);
		
		
		$user = $User->where("`username` = '$User->username'")->find();
		
		if($user['pwd'] == $User->pwd)
		{
			$_SESSION['uid'] = $user['uid'];
			$_SESSION['username'] = $User->username;
			$_SESSION['password'] = $User->pwd;
			
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
	
	public function isLogin()
	{
		if(isset($_SESSION['username']))
		{
			echo $_SESSION['username'];
		}
		else 
		{
			return false;
		}
	}
	
	public function out()
	{
		$_SESSION['username'] = null;
		$_SESSION['password'] = null;
		
		$this->success('退出成功',ROOT);
	}
}