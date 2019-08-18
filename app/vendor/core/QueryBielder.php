<?
namespace app\vendor\core; 
 defined('_access') or exit;
class QueryBielder  
{
	
	public $data;
	 
	 
	
	private $limit;
	private $select;
	private $in;
	private $where;
	private $like;
	private $orderByDesc;
	private $orderByAsc;
	 
	 
	 

	 public function __set($k,$v)
	 {
	 	 $this->data[$k]=$v;
	 }

	  


	  
	 public function SELECT($columns = [],$table)
	 {
	 	if (empty($columns)) {
	 		 
				$this->select = "SELECT * FROM ".$table;
	 	}
	 	else{
	 		$this->select = " SELECT ".implode(',', $columns). " FROM ".$table;
	 	}
	 	
	 	return $this;
	 }

	 public function LIMIT()
	 {
	 	$this->limit = " limit :ofset,:limit";
	 	 return $this;
	 }

	 public function IN($column,$arr = [])
	 {
	 	 
	 	$in  = str_repeat('?,', count($arr) - 1) . '?';
		$this->in = " WHERE ". $column. " IN ($in)";
		return $this;
	 }

	 public function WHERE($column)
	 {
	 	$this->where = ' WHERE '. $column .'= :'.$column ;
	 	return $this;
	 }

	 public function orderByDesc($column)
	 {
	 	 $this->orderByDesc = " ORDER BY $column DESC ";
	 	 return $this;
	 }

	 public function orderByAsc($column)
	 {
	 	  $this->orderByAsc = " ORDER BY ". $column." ASC ";
	 	 return $this;
	 }



	 public function sqlBieldes()
	 {
	 	 return  $this->select.$this->where.$this->in.$this->orderByAsc.$this->orderByDesc.$this->limit;
	 }




	public function insert()
		{
			$cols = array_keys($this->data);
			 $ins = [];
			$data = [];
			 //var_dump($this->db->data);
			foreach ($cols as $key) {
				 $ins[] = ":".$key;
				 $data[':'. $key] = $this->data[$key];
			}
			 

		echo	 $sql = "INSERT INTO  ". static::$table . "
			 				 (". implode(',', $cols).")
			 				 VALUES 
			 				 (".implode(',', $ins).")"; 
			 
			 return $this;
		}

	public function update()
		{
			 $cols = array_keys($this->data);

			 foreach ($cols as $key) {
				  
				 $data[':'.$key] = $this->data[$key];
				$up[] = $key.'=:'.$key;

			 	 
			}
	 		
			 $sql = "UPDATE " .static::getTable(). " SET  ".implode(',', $up). " WHERE id = :id";
			 
			  
	 		 

		}
	public function delete()
		{
			 $sql = "DELETE FROM ".static::getTable()." WHERE id = :id";
			 
			 $this->db->execute($sql,[':id'=>$this->data['id']]);
		}



}

 