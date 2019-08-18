<? 
namespace app;
 use app\vendor\core\Router;
 use app\vendor\error\errorHandle;
 session_start();
 include 'app/config/config.php';
 
  
 spl_autoload_register(function($clases){

 	  $file = str_replace('\\', '/', $clases).'.php';
 	if (file_exists($file) ) {
 		 include  $file;
 	}
 	  
 });
 new errorHandle();
  
$router = new Router;
$router->run();
 

 









 