<?
namespace app\vendor\error;
 
defined('_access') or exit;
class NotFoundException extends Exception
 {
 	
 	function __construct($massage = '',$code = 404)
 	{
 		 parent::__construct($massage,$code);
 	}
 } 