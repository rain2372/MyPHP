<?php
class UserModel extends Model
{
	protected $pk = 'uid';
	
	public function __construct($table)
	{
		parent::__construct($table);
		$this->setModel();
	}
	
	public function setModel()
	{
		$this->orderby('uid')->limit(4);
	}
	
	public function getUserInfo($username)
	{
		return $this->find($username);
	}
}