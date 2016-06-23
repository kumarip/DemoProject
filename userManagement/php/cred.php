<?php
/**********************************************
 * Credentials of the file Projects
 * @param: string
 * @return: null
 * *******************************************/
require_once ('library/filemakerlib/Filemaker.php');
define("DBNAME","Projects.fmp12");
define('SERVER','172.16.8.138');
define('USERNAME','Admin');
define('PASSWORD','pallavi');
$fm = new FileMaker(DBNAME, SERVER, USERNAME, PASSWORD);
?>