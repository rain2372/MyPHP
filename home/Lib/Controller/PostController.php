<?php
class PostController extends CommonController
{
	public function index($page=null)
	{
		$this->getHeader();
		$Post = M('Post');	

		import('Page');		//导入分页扩展
		
		$Page = new Page($page);
		$page = $Page->page;
		
		$this->assign('page',$page);
		
		try 
		{
			$post = $Post->where("`pid`=$page")->find();
		}
		catch(DbException $e)
		{
			$post = $Post->dbarray;
			$this->assign('page', $page-1);		//阻止页码继续增大
		}
		$this->assign('titlenow',$post['title']);
		$this->assign('post', $post);
		
		$this->getSider();
		$this->display('Post/index');
		
	}
	
	public function search($page=null)
	{
		$this->getHeader();
		$this->assign('titlenow','搜索');
		
		$Post = M('Post');
			
		if(isset($_POST['search-key']))
		{
			$search_key = $_POST['search-key'];
			$_SESSION['search-key'] = $search_key;			//保存当前tag标签
		}
		else 
		{
			$search_key = $_SESSION['search-key'];
		}
		
		import('Page');			//导入分页
		
		$Page = new Page($page);
		$page = $Page->page;
		
		$this->assign('page',$page);
		$Post->limit(($page-1)*5,5);
		
		$Post->where("`title` LIKE '%$search_key%' OR `content` LIKE '%$search_key%'");
		
		try 
		{
			$post = $Post->select();
		}
		catch(DbException $e)
		{
			$post = array(
					$Post->dbarray,
			);
			$this->assign('page', $page-1);
		}
		
		$this->assign('post', $post);
		
		$this->getSider();
			
		$this->display('Post/search');
	}

	public function newpost()
	{
		$this->checkPower();
		$this->display('Post/newpost');
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
			$this->success('删除成功',getUrl('Index','index'));
		}
		else
		{
			$this->error('删除失败');
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
		
		$this->display('Post/edit');
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