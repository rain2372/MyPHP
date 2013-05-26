<?php
class UserController extends CommonController
{
	public function index()
	{
		$this->checkPower();
		$this->getHeader();
		
		$User = M('User');
		$uid = $_SESSION['uid'];
		$user = $User->find($uid);
		$this->assign('user', $user);
		$this->display('User/index.php');
		
	}
	
	public function update()
	{
		$this->checkPower();
		$User = M('User');
		
		$User->id = $_POST['uid'];	//修改字段主键的值
		
		$User->username = $_POST['username'];
		if(!empty($_POST['password']))
		{
			$User->password = md5($_POST['password']);
		}
		$User->email = $_POST['email'];
		
		$result = $User->update();
		
		if($result)
		{
			$this->success('更新成功');
		}
		else 
		{
 			$this->error('更新失败');
		}
		
	}
	
}