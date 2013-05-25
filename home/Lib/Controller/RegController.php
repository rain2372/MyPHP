<?php
class RegController extends CommonController
{
	public function index()
	{
		$this->getHeader();
		
		$this->assign('titlenow','注册');
		
		$this->getSider();
			
		$this->display('Public/reg.php');
	}
	
	public function reg()
	{
		$data['uid'] = '';
		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		$re['repassword'] = md5($_POST['repassword']);
		if(equal($data['password'],$re["repassword"]))
		{
			$User = M('User');
			
			$result = $User->add($data);
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
