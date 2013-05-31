<?php
class CommonController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function checkPower()
	{
		if(!isset($_SESSION['username']))
		{
			$this->error('您无权访问该页，请先登录',getUrl('Index','index'));
			exit();
		}
	}
	
	public function getHeader()
	{
		$this->assign('title', 'MyPHP');
		$this->getTags();
		
	}
	
	public function getSider()
	{
		$Post = M('Post');
		$Post->limit(10);
		try 
		{
			$newpost = $Post->select();
		}
		catch(DbException $e)
		{
			$newpost = array(null);
		}
		$this->assign('newpost', $newpost);		
	}
	
	public function getTags()
	{
		$Post = M('Post');
		try 
		{
			$post = $Post->select();
		}
		catch(DbException $e)
		{
			$post = array(null);
		}
	
		$tag = '';
		foreach($post as $post)
		{
			$tag .= $post['tag'].',';		//将全部tag组合为一个字符串
		}
	
		$tag = rtrim($tag,',');
		$tags = explode(',',$tag);			//打散为数组
		$tags = array_unique($tags);		//去除重复标签
			
		$this->assign('tags', $tags);
	
	}
}