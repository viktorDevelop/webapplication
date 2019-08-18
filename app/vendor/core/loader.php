<?
namespace app\vendor\core; 
defined('_access') or exit;

 //$load = new loader;
 //$load->model("article")->getArticleAll();
class Loader  
{
	
	 protected static  $instanse;

	 protected $data = [];

	 protected function __clone(){}
	  

	 protected function __wakeup(){}

	 private function __construct(){}

	 public function __get($k)
	 {
	 	# code...

	 	return $this->data[$k];
	 }

	 public function __set($k,$v)

	 {
	 	$this->data[$k]=$v;
	 }



   public static function getInstance()
		    {
		        if (!isset(self::$instanse)) {
		        	
		        	$class = __class__;
		        	self::$instanse = new $class;
		        }
		        return self::$instanse;
		    }


	     
		

	 public function models($className)
	 {
 			$obj =  'app\models\\'.$className;
 			$obj = new $obj;
	 	  	return $obj;
	 	 
	 	   
	 }

	 public function libs ($className)
	 {
 			$obj =  'app\vendor\libs\\'.$className;
 			$obj = new $obj;
	 	  	return $obj;
	 	  
	 	   
	 }



	 


}