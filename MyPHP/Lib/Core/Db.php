<?php
class Db
{
	private $db;
	
	public function __construct()
	{
		$this->db = @new mysqli(C('DB')['HOST'],C('DB')['USER'],C('DB')['PWD'],C('DB')['DATABASE']);
		if($this->db->connect_errno)
		{
			echo $this->db->connect_errno;
		}
		$this->db->set_charset("utf8");	
	}
	
	public function insert($sql)
	{
		$result = $this->db->query($sql);
		
		if($result)
		{
			return $this->db->insert_id;
		}
		else
		{
			return false;
		}
	}
	
	public function del($sql)
	{
		$result = $this->db->query($sql);
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update($sql)
	{
		$result = $this->db->query($sql);
		if($result)
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	
	public function select($sql)
	{
		$result = $this->db->query($sql);
		$number = $result->num_rows;
		if($number<1)
		{
			return array(null);	
		}
		$array = null;
		while($row = $result->fetch_array())
		{
			$array[] = $row;
		}
		return $array;
	}
	
	public function find($sql)
	{
		$result = $this->db->query($sql);
		$result  = $result->fetch_array();
		return $result;
	}
}