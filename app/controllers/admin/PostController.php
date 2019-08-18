<?
namespace app\controllers\admin;

defined('_access') or exit;

/**
 * 
 */
class PostController extends AdminController
{
	
	public function  actionAddPostInCat($params = "")
	 {

		  
		$postModel = $this->classLoad->models('postModel'); 	
		$this->view->catInfo = $_GET;
		 
		$this->templateAdmin('add'); 
		 
	}



	 public function actionPostListBy()
	{
		 
	 	$postModel = $this->classLoad->models('postModel');
	 	 $this->view->catInfo = $_GET;
	 	$this->view->postList = $postModel->getArticleByCategory($_GET['cat']);
		$this->templateAdmin('list');
	 }


	public function actionEditView()
	{	$postModel = $this->classLoad->models('postModel'); 
		$this->view->catInfo = $_GET;
		$this->view->post = $postModel->getArticlesOne($_GET['aliaspost']);	
		$this->templateAdmin('edit'); 
 
	} 
	 
	public function actionEdite()
	{	

	
		if (isset($_POST['postEdit'])) {
				$postModel = $this->classLoad->models('postModel'); 
				$postModel->edite($_POST);
				$url = "admin/post/post-list-by/?cat={$_POST['cat']}&id={$_POST['idcat']}";
				$this->headerLocate($url);
			}
	}
				 
				  
				 
		

 
	 public function actionAdd()
	 {
	 	$postModel = $this->classLoad->models('postModel'); 	
	  	$CategoryByndArticleModel = $this->classLoad->models('CategoryByndArticleModel');
	 	if (empty($_POST['id_category'])) {
	 		 $postModel->save($_POST);
	 	}
	 	else{
	 		 $postLastId = $postModel->save($_POST);

		 		if (!empty($postLastId)) {
		 			 $CategoryByndArticleModel->save($postLastId,$_POST['id_category']);
		 			 $url = "admin/category/index";
				  	$this->headerLocate($url);
		 		}
	 		
	 		 
	 		}
 
		
	 }


public function actionDelete()
	 {
	 	 
	 	$this->view->catInfo = $_GET;
	 	 

	 	if (isset($_POST['delpublic'])) {
	 			 
	 			$this->classLoad->models('CategoryByndArticleModel')->republicPost($_POST['idcat'],$_POST['idpost']);
	 			 $url = "admin/post/post-list-by/?cat={$_POST['cat']}&id={$_POST['idcat']}";
				  	$this->headerLocate($url);

	 		}
	 	if (isset($_POST['delpost'])) {
	 			 
	 			$this->classLoad->models('postModel')->delete($_POST['idpost']);
	 			 $url = "admin/post/post-list-by/?cat={$_POST['cat']}&id={$_POST['idcat']}";
				  	$this->headerLocate($url);

	 		}
	 }

	  

	 
}