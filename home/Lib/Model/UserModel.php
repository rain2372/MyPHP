<?php
class UserModel extends Model
{
	protected $pk = 'uid';
	
	public $username;
	public $pwd;
	public $email;
	
	protected $data = array(
			'uid' => 'uid',
			'username' => 'username',
			'pwd' => 'pwd',
			'email' => 'email',		
	);
	
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
		return $this->where("`username`=$username")->find();
	}
}