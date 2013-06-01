<?php
class TagController extends CommonController
{
	public function index($tag = null)
	{
		$this->getHeader();
		
		$tag = urldecode($tag);		//url解码

		$_SESSION['tag'] = $tag;	//用session保存tag标签
		
		$Post = M('Post');
		
		$this->assign('page', 1);		//设置默认页
		
		try 
		{
			$post = $Post->where("`tag` LIKE '%$tag%'")->limit(5)->select();	
		}
		catch(DbException $e)
		{
			$post = array(
					
					$Post->dbarray,
			);
		}	
		
		$this->getSider();
		$this->assign('post', $post);
		$this->display('Tag/index');
		 
	}
	public function page($page=null)
	{
		$this->getHeader();
		
		$tag = $_SESSION['tag'];
		$Post = M('Post');
		
		import('Page');
		$Page = new Page($page);
		$page = $Page->page;
		
		$this->assign('page',$page);	
		$Post->limit(($page-1)*5,5);
			
		try
		{
			$post = $Post->where("`tag` LIKE '%$tag%'")->select();
		}
		catch(DbException $e)
		{
			$post = array(
						
					$Post->dbarray,
			);
			$this->assign('page', $page-1);			//页码不能增大
		}
		
		$this->getSider();
		$this->assign('post', $post);
		$this->display('Tag/index');
	}
}