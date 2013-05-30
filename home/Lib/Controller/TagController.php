<?php
class TagController extends CommonController
{
	public function index($tag = null)
	{
		$this->getHeader();
		
		$tag = urldecode($tag);		//url解码

		$_SESSION['tag'] = $tag;	//用session保存tag标签
		
		$Post = M('Post');
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
		$this->display('Tag/index.php');
		 
	}
	public function page($page=null)
	{
		$this->getHeader();
		
		$tag = $_SESSION['tag'];
		$Post = M('Post');
		if(isset($page))
		{
			if($page<1)
			{
				$page=0;
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
			$post = $Post->where("`tag` LIKE '%$tag%'")->select();
		}
		catch(DbException $e)
		{
			$post = array(
						
					$Post->dbarray,
			);
			$this->assign('page', $page);			//页码不能增大
		}
		
		$this->getSider();
		$this->assign('post', $post);
		$this->display('Tag/index.php');
	}
}