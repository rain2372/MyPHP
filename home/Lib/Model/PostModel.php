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
	
	protected $data = array(
			'pid' => 'pid',
			'title' => 'title',
			'content' => 'content',
			'tag' => 'tag',
			'uid' => 'uid',
			'pdate' => 'pdate',
			
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