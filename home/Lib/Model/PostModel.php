<?php
class PostModel extends Model
{
	protected $pk = 'pid';
	
	public $pid;
	public $title;
	public $content;
	public $tag;
	public $uid;
	public $pdate;
	
	//对象关系映射
	protected $data = array(
			'pid' => 'pid',
			'title' => 'title',
			'content' => 'content',
			'tag' => 'tag',
			'uid' => 'uid',
			'pdate' => 'pdate',
			
	);
	
	//当数据库无数据时默认显示的值
	public $dbarray = array(
			'pid' => '1',
			'title' => '没有找到任何内容',
			'content' => '',
			'tag' => '',
			'uid' => null,
			'pdate' => null,
	);
	
	public function __construct($table)
	{
		parent::__construct($table);
		$this->setModel();
	}
	
	public function setModel()
	{
		$this->orderby('pid')->limit(5);
	}
}