<?php
class PostController extends CommonController
{
	public function index($number)
	{
		$this->getHeader();
		
		$Post = M('Post');
		
		$this->assign('page',$number);
		
		$post = $Post->find("pid=$number");
		
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
		$Post = M('Post');
		$Post->select();
		$this->display('Post/newpost.php');
	}
	
	public function add()
	{
		$Post = M('Post');
		//$data['pid'] = null;
		//$data['title'] = $_POST['title'];
		//$data['content'] = $_POST['content'];
		//$data['date'] = time();
		//$data['cid'] = $_POST['cid'];
		//$result = $Post->add($data);
	
		$Post->pid = null;
		$Post->title = $_POST['title'];
		$Post->content = $_POST['content'];
		$Post->tag =$_POST['tag'];
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
		$Post = M('Post');
		$result = $Post->delete($id);
		if($result)
		{
			$this->success('成功');
		}
		else
		{
			$this->error('失败');
		}
	}
	
	public function edit($id)
	{
		$this->getHeader();
	
		$Post = M('Post');
		$post = $Post->where("`pid`=$id")->select();
		
		$this->assign('post', $post);
	
		$this->display('Post/edit.php');
	}
	
	public function update()
	{
		$Post = M('Post');
		$Post->id = $_POST['pid'];
		$data['title'] = $_POST['title'];
		$data['content'] = $_POST['content'];
		$data['date'] = time();
		$data['cid'] = 1;
	
		$result = $Post->update($data);
	
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