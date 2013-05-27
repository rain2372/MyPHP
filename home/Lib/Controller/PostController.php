<?php
class PostController extends CommonController
{
	public function index($number)
	{
		$this->getHeader();
		$Post = M('Post');	
		$post = $Post->where("`pid`=$number")->find();
		$this->assign('titlenow',$post['title']);
		$this->assign('post', $post);
		
		$this->getSider();
		$this->display('Post/index.php');
		
	}
	
	public function search($page=null)
	{
		$this->getHeader();
		$this->assign('titlenow','搜索');
		
		$Post = M('Post');
			
		if(isset($_POST['search-key']))
		{
			$search_key = $_POST['search-key'];
			$_SESSION['search-key'] = $search_key;
		}
		else 
		{
			$search_key = $_SESSION['search-key'];
		}
		
		if(isset($page))
		{
			if($page<0) 
			{
				$page=0;
			}
			$Post->limit($page*5,5);
			$this->assign('page',$page);
		}	
		else 
		{
			$Post->limit(5);
		}
		$Post->where("`title` LIKE '%$search_key%' OR `content` LIKE '%$search_key%'");
		
		$post = $Post->select();	
		$this->assign('post', $post);
		
		$this->getSider();
			
		$this->display('Post/search.php');
	}

	public function newpost()
	{
		$this->getHeader();
		$this->checkPower();
		
		$this->getHeader();
		$Post = M('Post');
		$Post->select();
		
		$this->getSider();
		
		$this->display('Post/newpost.php');
	}
	
	public function add()
	{
		$this->checkPower();
		
		$Post = M('Post');
	
		$Post->title = $_POST['title'];
		$Post->content = $_POST['content'];
		$Post->tag =$_POST['tag'];
		$Post->uid = 1;
		$Post->pdate = time();
		
	
		$result = $Post->add();
	
		if($result)
		{
			$this->success('发布成功',getUrl('Post','edit',$result));
		}
		else
		{
			$this->error('发布失败');
		}
	}
	
	public function del($id)
	{
		$this->checkPower();
		
		$Post = M('Post');
		$result = $Post->delete($id);
		if($result)
		{
			$this->success('成功',getUrl('Index','index'));
		}
		else
		{
			$this->error('失败');
		}
	}
	
	public function edit($id)
	{
		$this->getHeader();
		$this->checkPower();
		$Post = M('Post');
		$post = $Post->where("`pid`=$id")->find();
		
		$this->assign('post', $post);
		
		$this->getSider();
		
		$this->display('Post/edit.php');
	}
	
	public function update()
	{
		$this->checkPower();
		$Post = M('Post');
		$Post->id = $_POST['pid'];
		$Post->title = $_POST['title'];
		$Post->content = $_POST['content'];
		$Post->tag =$_POST['tag'];
		$Post->pdate = time();
	
		$result = $Post->update();
	
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