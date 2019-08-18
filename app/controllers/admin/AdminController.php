<?
namespace app\controllers\admin;
use app\vendor\core\loader;
use app\vendor\core\View;
use app\vendor\core\Auth;
use Exception;
defined('_access') or exit;

 
class AdminController 
{
	
	protected $auth;
	protected $route;
	public $classLoad;
	public $view;
	function __construct($route)
	{
		
		 $this->classLoad = loader::getInstance();
		 $this->view = view::getInstance();
		 $this->route = $route;
		 $this->auth = new Auth; 
		$this->checkAutorization(); 
		 
		 
		 
	}

	 public function templateAdmin($layouts)
		 {
			  $path = trim($this->route['prefix'],'\\').'/'.$this->route['controller'].'/'.$layouts.'View';
			$this->view->view = $this->view->render($path);
	 	  	$this->view->load('admin/index');
		 }


	 protected function headerLocate($value)
	 {
	 	  $url = 'location:'.URL.$value;
	 	header($url);
	 	   
	 }

	 public function checkAutorization()
	 {
	 	if ($this->auth->user() !==null) {
	 		 $this->auth->autorize($this->auth->user());

	 	}

	 	if (!$this->auth->autorized() && $this->route['action']!=='login') {
		 	 
		 	$this->headerLocate('admin/login');
		 	exit;
		 }
	 	 
	 	
	 }

	 
	public function actionIndex()

	 {	
	 	$this->view->countCategory = $this->classLoad->models('CategoryModel')->getCount();
	 	$this->view->countPost = $this->classLoad->models('postModel')->getCount();
	 	$this->templateAdmin('index'); 
	 }

	public function actionLogin()
	{
		  
		 if (isset($_POST['enter'])) {

			 	$UserModel = $this->classLoad->models('UserModel')->getUserInfo($_POST['login'],md5($_POST['password'])); 

			 	 if (!empty($UserModel)) {
			 	 $user = $UserModel[0];
			 	 	if ($user['role']==='admin') {
			 	 		$hash = md5($user['id'].$user['login'].$user['password'].$this->auth->salt());
			 	 		$this->auth->autorize($hash);
			 	 		 $this->headerLocate('admin');
			 	 		 
			 	 	}
			 	 
				}else{
					$this->view->error = "не верные данные";	
			}
		 }
		
		
		 
		 
		 
 		$this->view->load('admin/signIn');
	}

	public function actionExit()
	{
		 $this->auth->unAutorized();
		$this->headerLocate('admin');
	}

	  
 
	 
}