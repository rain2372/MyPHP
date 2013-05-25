<?php
class UserController extends CommonController
{
	public function index()
	{
		$this->getHeader();
		
		$User = M('User');
		$uid = $_SESSION['uid'];
		$user = $User->find($uid);
		$this->assign('user', $user);
		$this->display('User/index.php');
		
	}
	
	public function update()
	{
		$User = M('User');
		
		$User->id = $_POST['uid'];	//修改字段主键的值
		
		$data['username'] = $_POST['username'];
		if(!empty($_POST['password']))
		{
			$data['password'] = md5($_POST['password']);
		}
		$data['email'] = $_POST['email'];
		
		$result = $User->update($data);
		
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