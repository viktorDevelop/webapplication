<?
namespace app\vendor\core; 
use app\vendor\core\DB;
use app\vendor\core\QueryBielder;
 defined('_access') or exit;
class ActiveRecordModels 
{
	  
	 
	protected $db;
	protected $data;
  
	function __construct()
		{
			 $this->db =  DB::getInstance();
		}

	 public function __set($k,$v)
	 {
	 	 $this->data[$k]=$v;
	 }

	 
	public function QueryBielder()
	{
		 $QueryBielder = new QueryBielder();
		 return $QueryBielder;;
	}

	public static function getTable(){
		return static::$table;
	}



	 public function insert($table = "")
		{
			$cols = array_keys($this->data);
			 $ins = [];
			$data = [];
			 //var_dump($this->db->data);
			foreach ($cols as $key) {
				 $ins[] = ":".$key;
				 $data[':'. $key] = $this->data[$key];
			}
			 
			 if (empty($table)) {
			 	$sql = "INSERT INTO  ". static::$table . "
			 				 (". implode(',', $cols).")
			 				 VALUES 
			 				 (".implode(',', $ins).")"; 
			 }
			 else{
			 	$sql = "INSERT INTO  ". $table . "
			 				 (". implode(',', $cols).")
			 				 VALUES 
			 				 (".implode(',', $ins).")"; 
			 }

			 
			  
			$this->db->query($sql); 
			  $this->db->execute($data);  
			  return $this->db->LastInserId();
		}

	public function update()
		{
			 $cols = array_keys($this->data);

			 foreach ($cols as $key) {
				  
				 $data[':'.$key] = $this->data[$key];
				$up[] = $key.'=:'.$key;

			 	 
			}
	 		
			  $sql = "UPDATE " .static::getTable(). " SET  ".implode(',', $up). " WHERE id = :id";
			  
			  $this->db->query($sql); 
			  $this->db->execute($data);  
			  return $this->db->LastInserId();
	 		 

		}
	 
	 
}