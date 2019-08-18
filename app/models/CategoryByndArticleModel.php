<?
namespace app\models;
use app\vendor\core\ActiveRecordModels;
defined('_access') or exit;
/**
 * 
 */
class CategoryByndArticleModel extends ActiveRecordModels
{
	 static $table = 'categoryBindArticle';

	public function save($idPost, $idCat)
	{
		 
		 
		$this->id_category =  $idCat;
		$this->id_article = $idPost;
		return $this->insert();
		 
	}

	public  function republicPost($idCat,$id_article)
	{
		$this->db->query("SELECT id FROM categoryBindArticle WHERE id_article = :id_article AND id_category = :idCat");
		$this->db->bindValInt(':idCat',$idCat);
		$this->db->bindValInt(':id_article',$id_article);
		$this->db->exec();
	 	$res = $this->db->fetchAll()[0];
		 

	 $this->db->query(" DELETE FROM ".static::getTable()." WHERE id = :id");
	  $this->db->bindValInt(':id',$res['id']);
	  $this->db->exec();
	}	

	 
		 
}