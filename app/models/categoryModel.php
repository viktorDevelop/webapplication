<?
namespace app\models;
use app\vendor\core\ActiveRecordModels;

defined('_access') or exit;
/**
 * 
 */
class CategoryModel extends ActiveRecordModels
{
	 static $table = 'category';

	 public function getMenu($note)
	 {	
	 	  $sql = $this->QueryBielder()
 		 				->select([],'category')
 		 				->where('menu_note')
 		 				->sqlBieldes();
	 		 
	 		$this->db->query($sql);
	 		$this->db->bindValInt(':menu_note',$note);
	 		$this->db->exec();
	 		return $this->db->fetchAll();
	 	 
	 }

	 public function getPageInfo($alias)
	 {
	 	 $this->db->query($this->QueryBielder()
	 					->select([],'category')
	 					->where('title_url')
	 					->sqlBieldes()
	 				);
	 	 $this->db->bindValStr(':title_url',$alias);
	 	 $this->db->exec();
	 	 return  $this->db->fetchAll()[0];

	 }

	 public function getCount()
	 {
	 	$this->db->query("SELECT id,COUNT(id) as 'catCount' FROM category ");
	 	$this->db->exec();
	 	return $this->db->fetchAll()[0];
	 }

	

	  public function getCategory(){
	 	$this->db->query(" SELECT category.title, category.id ,category.title_url , COUNT('title') as 'artcount' FROM `categoryBindArticle` LEFT JOIN category ON category.id = categoryBindArticle.id_category
GROUP BY category.title");
	 	$this->db->exec();
	 	return $this->db->fetchAll();

	 	
	 }

	  public function edite($data)
		 {
		  	$this->id = $data['id'];
		 	$this->title = $data['title'];
			$this->title_url = $data['titleEn'];
			$this->menu_note = $data['menu_note'];
			$this->keyword = $data['keyword'];
			$this->description = $data['description'];
			$this->update();
			$this->db->LastInserId(); 
			 
		 }

	   public function save($data)
		 {
		  
		 	$this->title = $data['title'];
			$this->title_url = $data['titleEn'];
			$this->menu_note = $data['menu_note'];
			$this->keyword = $data['keyword'];
			$this->description = $data['description'];
			$this->insert();
		return 	$this->db->LastInserId(); 

			 
			 
			 
		 }

	public function delete($id)
	{
		 $this->db->query(" DELETE FROM ".static::getTable()." WHERE id = :id");
		  $this->db->bindValInt(':id',$id);
		  $this->db->exec();

		  
	}
}