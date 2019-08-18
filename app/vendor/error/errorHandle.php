<?
namespace app\vendor\error;
defined('_access') or exit;
class errorHandle 
{
	
	function __construct()
	{
		 if (DEBUG) {
		 	 error_reporting(-1);

		 }else{
		 	error_reporting(0);
		 }
		 ob_start();
		 set_error_handler([$this,'errorHandler']);
		 register_shutdown_function([$this,'fatalErrorHandle']);
		 set_exception_handler([$this,'exceptionHandle']);
	}

	function errorHandler($errno, $errstr, $errfile, $errline)
	{
		error_log("[". date('Y-m-d H:i:s') ."]  текст ошибки {$errstr} | файл : {$errfile},
		 строка : {$errline} \n============================================================\n",3,__DIR__.'/error.log');
		$this->displayError($errno, $errstr, $errfile, $errline);
		 
		return true;
	}

	protected function displayError($errno, $errstr, $errfile, $errline,$response = 500)
	{
		http_response_code($response);
		if ($response == 404 ) {
			 require '/views/error404.html';
			 die;
		}

		if ($response == 403 ) {
			 require '/views/error403.html';
			 die;
		}
		if (DEBUG) {
		 	require '/views/dev.php';
		}
		else{
			require '/view/prod.php';
		}
	}

	public function fatalErrorHandle()
	{
		$error = error_get_last();
	 	if (!empty($error) && $error['type'] & ( E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)) 
	 	{
	 		error_log("[". date('Y-m-d H:i:s') ."]  текст ошибки {$error['message']} | файл : {$error['file']},
		 строка : {$error['line']} \n============================================================\n",3,__DIR__.'/error.log');
	 		 ob_end_clean();
	 		 $this->displayError($error['type'],$error['message'],$error['file'],$error['line']);
	 	}
	 	else{
	 		ob_end_flush();
	 	}
	}

	public function exceptionHandle($e)
	{
		error_log("[". date('Y-m-d H:i:s') ."]  текст ошибки {$e->getMessage()} | файл : {$e->getFile()},
		 строка : {$e->getline()} \n============================================================\n",3,__DIR__.'/error.log');
		$this->displayError('Exception',$e->getMessage(),$e->getFile(),$e->getline(),$e->getCode());
	}




}
