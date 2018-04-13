<?php  
defined ('DS') ? null : define ('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define ('SITE_ROOT', DS.'xampp'.DS.'htdocs'.DS.'hatchery');
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'core');

require_once(LIB_PATH.DS."db_connect.php");
require_once(LIB_PATH.DS."class.tank.php");
require_once(LIB_PATH.DS."class.specie.php");  
 
?>