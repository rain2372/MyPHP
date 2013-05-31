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
		if(isset($page))
		{
			if($page<1)
			{
				$page=1;
			}
			else 
			{
				$page = $page - 1;
			}
			$Post->limit($page*5,5);
			$this->assign('page',$page+1);
		}	
		else 
		{
			$Post->limit(5);
		}
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
			
			$this->assign('page', $page);			//页码不能增大		
		}	
		$this->assign('post', $post);
		$this->getSider();
		$this->display('Index/index.php');
		
	}
	
}
?>