<?
namespace app\vendor\core; 
 use pdo;
 defined('_access') or exit; 
class DB 
{
	private $dbh;
	private $sth;
	 
	 protected static  $instanse;
 
	 protected function __clone(){}
	  

	 protected function __wakeup(){}

	 

	 
   public static function getInstance()
		    {
		        if (!isset(self::$instanse)) {
		        	
		        	$class = __class__;
		        	self::$instanse = new $class;
		        }
		        return self::$instanse;
		    }

	 
	private function __construct()
	{
		$configDB = include_once ROOT.'/app/config/configDB.php';

		 $dsn = 'mysql:dbname='.$configDB['dbName'].';host='.$configDB['host'];

		 try {
		 	$this->dbh = new PDO($dsn,$configDB['dbUser'],$configDB['password']);
		 } catch (Exception $e) {
		 	echo 'Подключение не удалось: ' . $e->getMessage();
		 }
		
	}


 
 

	public function query($sql)
	{
		$this->sth = $this->dbh->prepare($sql);
		 
		 
	}
	public function exec()
	{
		$this->sth->execute();
		 
	}

	public function execute($param = [])
	{
		$this->sth->execute($param);
		 
	}

	public function fetchAll()
	{
		 return $this->sth->fetchAll();
	}

	public function fetchAllColums()
	{
		return $this->sth->fetchAll(PDO::FETCH_COLUMN);
		 
	}

	public function bindValInt($column,$param)
	{
		 
		$this->sth->bindValue($column,$param,PDO::PARAM_INT);
	}

	public function bindValStr($column,$param)
	{
		 
		$this->sth->bindValue($column,$param,PDO::PARAM_STR);
	}

	public function LastInserId()
	{
		return $this->dbh->lastInsertId();
	}

	public function rowCount()
	{
		return  $this->sth->rowCount();
	}

	 
	 
	 
}