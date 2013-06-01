<?php
class IndexController extends CommonController
{
	public function index()
	{
		$this->page();
	}
	
	public function page($page=null)
	{		
		$this->getHeader();
		$Post = M('Post');

		import('Page');			//导入分页扩展
		
		$Page = new Page($page);
		$page = $Page->page;
		
		$this->assign('page',$page);
		
		$Post->limit(($page-1)*5,5);
			
		try
		{
			$post = $Post->select();
		}
		catch (DbException $e)
		{
			//数据库中没有内容时返回的值
			$post = array(
				$Post->dbarray,						
			);
			
			$this->assign('page', $page-1);			//页码不能增大		
		}	
		$this->assign('post', $post);
		$this->getSider();
		$this->display('Index/index');
		
	}
	
}
?>