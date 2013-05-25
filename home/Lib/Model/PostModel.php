<?php
class PostModel extends Model
{
	protected $pk = 'pid';
	
	public $pid;
	public $title;
	public $content;
	public $date;
	public $cid;
	
	protected $data = array(
			'pid' => 'pid',
			'title' => 'title',
			'content' => 'content',
			'date' => 'date',
			'cid' => 'cid',
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