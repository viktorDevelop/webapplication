<?
 namespace app\controllers\admin;

  
 defined('_access') or exit;
/**
 * 
 */
class CategoryController extends  AdminController
{
	public function actionIndex(){
	 	
	 	   $categoryModel = $this->classLoad->models('categoryModel');
	 	$this->view->category = $categoryModel->getCategory();
	 	 $this->templateAdmin('list');
	 }



	public function actionAddCategoryView()
	{
		$this->templateAdmin('add');	
	}

	public function actionEditView()
	{
		 $categoryModel = $this->classLoad->models('categoryModel');
		 $this->view->category = $categoryModel->getPageInfo($_GET['cat']);
		$this->templateAdmin('edit');	
	}

	 public function actionAdd(){
	 	
		if (isset($_POST['catAdd'])) {
			 $idCatLast = 	$this->classLoad->models('categoryModel')->save($_POST);
  				$this->headerLocate("admin/post/add-post-inCat/?id={$idCatLast}");
		 	 
		}
		 
 		
	 	
	 }

	 public function actionEdit()
	 {
	 	 if (isset($_POST['catEdit'])) {
	 	 	 $categoryModel = $this->classLoad->models('categoryModel');
	 	 	$categoryModel->edite($_POST);
	 	 	$this->headerLocate('admin/category/index');
	 	 }

	 }

	 public function actionDelete()
	 {
	 	  $this->classLoad->models('categoryModel')->delete($_GET['id']);

	 	 $this->headerLocate('admin/category/index');
	 }
}