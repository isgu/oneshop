<?php
/**
 *  index.php PHPCMS 入口
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-6-1
 */
 //PHPCMS根目录

define('PHPCMS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

include PHPCMS_PATH.'/phpcms/base.php';
if(isset($_GET['l']) AND  $_GET['l']=='zh'){ 
  unset($_SESSION['language']);
}
if(isset($_GET['l']) AND  $_GET['l']=='en'){ 
  $_SESSION['language'] = 'en';
}
var_dump($_SESSION['language']);
pc_base::creat_app();

?>
