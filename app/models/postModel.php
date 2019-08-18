<?
namespace app\models;
use app\vendor\core\ActiveRecordModels;
defined('_access') or exit;
/**
 * 
 */
class PostModel extends ActiveRecordModels
{
	 static $table = 'article';

	 public function getArticleByCategory($alias)
		 {
		 	 
		 	 	$this->db->query("SELECT * FROM article WHERE id IN 
									(SELECT id_article FROM categoryBindArticle WHERE id_category IN
									(SELECT id FROM category WHERE title_url = :alias)) ");
		 		$this->db->bindValStr(':alias',$alias);
				$this->db->exec();
			return 	$this->db->fetchAll();
 
		 }
	public function getArticlesIndex()
	{
		 
	 	$this->db->query("SELECT * FROM article ORDER BY id DESC limit 1,5");
	 	 
	 	$this->db->exec();
	 	return $this->db->fetchAll();
	}

	public function getCount()
	 {
	 	$this->db->query("SELECT id,COUNT(id) as 'postCount' FROM article ");
	 	$this->db->exec();
	 	return $this->db->fetchAll()[0];
	 }


	public function getArticlesOne($alias)
	{


		$this->db->query($this->QueryBielder()
	 					->select([],'article')
	 					->where('title_url')
	 					->sqlBieldes()
	 				);
	 	 $this->db->bindValStr(':title_url',$alias);
	 	 $this->db->exec();
	 	 return  $this->db->fetchAll()[0];
	}

	public function edite($data)
		 {
		 	 
		  	$this->id = $data['idPost'];
		 	$this->title = $data['title'];
			$this->title_url = $data['titleEn'];
			$this->full_text = $data['full_text'];
			$this->keyword = $data['keyword'];
			$this->description = $data['description'];
			$this->preview = $data['preview'];
			$this->update();
			 
			 
		 }

	   public function save($data)
		 {
		  
		 	$this->title = $data['title'];
			$this->title_url = $data['titleEn'];
			$this->full_text = $data['full_text'];
			$this->keyword = $data['keyword'];
			$this->description = $data['description'];
			$this->preview = $data['preview'];
			return $this->insert();

		  
			  
		 }

	public function delete($id)
	{
		 $this->db->query(" DELETE FROM ".static::getTable()." WHERE id = :id");
		  $this->db->bindValInt(':id',$id);
		  $this->db->exec();

		  
	}
		 
}