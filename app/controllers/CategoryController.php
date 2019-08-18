<?
 namespace app\controllers;
 use app\controllers\FrontController;
 defined('_access') or exit;
/**
 * 
 */
class CategoryController extends FrontController 
{
	
	 function actionIndex(){
	 	$postModel = $this->classLoad->models('postModel');
	 	 $categoryModel = $this->classLoad->models('categoryModel');
	 	$this->view->PageData = $categoryModel->getPageInfo('html');
	 	$this->view->articles = $postModel->getArticlesIndex('html');
		$this->template('index','category');
	 }

	 function actionView(){
	 	
	 	$postModel = $this->classLoad->models('postModel');
	 	 $categoryModel = $this->classLoad->models('categoryModel');
	 	$this->view->PageData = $categoryModel->getPageInfo($this->routeParam['alias']);
	 	$this->view->articles = $postModel->getArticleByCategory($this->routeParam['alias']);
		$this->template('category');
	 }

}