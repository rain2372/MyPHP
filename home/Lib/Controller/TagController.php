<?php
class TagController extends CommonController
{
	public function index($tag = null)
	{
		$this->getHeader();
		
		$tag = urldecode($tag);		//url解码
		 
		$Post = M('Post');
		
		$post = $Post->where("`tag` LIKE '%$tag%'")->limit(10)->select();		
		
		$this->getSider();
		$this->assign('post', $post);
		$this->display('Tag/index.php');
		 
	}
}