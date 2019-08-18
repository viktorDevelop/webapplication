<?
namespace app\models;
use app\vendor\core\ActiveRecordModels;
defined('_access') or exit;
 

 
class UserModel extends ActiveRecordModels
{
	protected static  $table = "user";
	 
	 
	 public function getUserInfo($login,$password)
	 {
	 	
	 	$this->db->query("SELECT * FROM user  
						WHERE login = :login and password = :password  limit 1");
	 	$this->db->bindValStr(':login',$login);
	 	$this->db->bindValStr(':password',$password);
	 	$this->db->exec();
	 	return $this->db->fetchAll();


 
	 }

	 
}