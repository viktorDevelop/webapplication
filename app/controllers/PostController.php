<?
 namespace app\controllers;
 use app\controllers\FrontController;
 defined('_access') or exit;
/**
 * 
 */
class PostController extends FrontController 
{
	
	  

	public function actionView($alias = null)
	{

	 	 $postModel = $this->classLoad->models('postModel');
	 	  
	 	$this->view->PageData = $postModel->getArticlesOne($this->routeParam['alias']);
	 	$this->view->article = $postModel->getArticlesOne($this->routeParam['alias']);
		$this->template('post');
	 }

	  

	  

}