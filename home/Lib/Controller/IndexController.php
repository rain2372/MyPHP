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
			if($page<0) $page=0;
			$Post->limit($page*5,5);
			$this->assign('page',$page);
		}	
		else 
		{
			$Post->limit(5);
		}
		
		$post = $Post->select();	
		$this->assign('post', $post);
		
		$this->getSider();
			
		$this->display('Index/index.php');
		
	}
	
}
?>