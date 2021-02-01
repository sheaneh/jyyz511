<?php
if(version_compare(PHP_VERSION,'5.2.0','<')){die('Require PHP > 5.2');}
if(count(debug_backtrace()) > 0){die('Cannot request');}

$_ENV['USE_TIME']['start'] = microtime(TRUE);
$_ENV['USE_MEM']['start'] = memory_get_usage();

defined('__DIR__') or define('__DIR__',dirname(__FILE__));
define('EXT', '.php');
define('DS', DIRECTORY_SEPARATOR);
define('DIR_ROOT',__DIR__.DS);
define('DIR_COMMON',DIR_ROOT.'common'.DS);
$file_init = DIR_COMMON.'start.php';

file_exists($file_init)?require_once $file_init:die('Cannot find file "start.php"');

