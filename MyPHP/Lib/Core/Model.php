<?php
/*
 * 模型基类
 */
class Model 
{
	static private $db;
	
	protected $table;
	
	//主键
	protected $pk = null;
	
	protected $where = null;
	protected $orderby =null;
	protected $limit = null;
	
	protected $data = array();
	
	public function __construct($table)
	{	
		$this->table =$table;
		
		if(empty(self::$db))
		{
			self::$db = new Db();
		}
		return self::$db;
			
	}
	
	public function where($where)
	{
		$this->where = " WHERE $where";
		return $this;
	}
	
	public function orderby($orderby)
	{
		$this->orderby = " ORDER BY `$orderby` DESC";
		return $this;
	}
	
	public function limit($number,$number2=null)
	{
		if(isset($number2))
		{
			$this->limit = " LIMIT $number,$number2";
		}
		else 
		{
			$this->limit = " LIMIT $number";
		}
		return $this;
	}
	
	public function add($data=null)
	{
		if(!empty($data))
		{
			$sql ="INSERT INTO `$this->table`";
			$sql .= " (`".implode("`, `", array_keys($data))."`)";
			$sql .=" VALUES ('".implode("', '", $data)."')";	
		}
		else
		{
			$sql ="INSERT INTO `$this->table` (";
			foreach ($this->data as $key=>$value)
			{
				$sql .= "`$key`,";
			}
			
			$sql = rtrim($sql,',');		//去掉产生的sql语句末尾逗号
			
			$sql .= ") VALUES (";
			foreach ($this->data as $key=>$value)
			{
				$sql .= "'".$this->$value."'".',';
			}
				
			$sql = rtrim($sql,',');		//去除末尾逗号
			
			$sql .= ")";
		}
		$result = self::$db->insert($sql);
		if($result)
		{
			return $result;
		}
		else
		{
			return false;
		}
	}
	
	public function delete($id)
	{
		$sql = "DELETE FROM `$this->table` WHERE `$this->pk` = $id";
		
		$result = self::$db->del($sql);
		if($result)
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	
	public function update($data)
	{
		$sql = "UPDATE `$this->table` SET";
		foreach ($data as $key =>$value)
		{
			$sql.= " `$key` = '$value',";
		}
		
		$sql = rtrim($sql,',');
		$sql .= " WHERE $this->pk =$this->id";
		
		$result = self::$db->update($sql);
		if($result)
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	
	public function select()
	{
		$sql = "SELECT * FROM `$this->table`";
		$sql .=$this->where;
		$sql .=$this->orderby;
		$sql .=$this->limit;
		$result = self::$db->select($sql);
			
		if($result)
		{
			return $result;
		}
		else 
		{
			return false;
		}
	}
	
	public function find()
	{
		$sql ="SELECT * FROM `$this->table`";
		$sql .=$this->where;
		$result = self::$db->find($sql);
	
		if($result)
		{
			return $result;
		}
		else
		{
			return false;
		}
	}
}