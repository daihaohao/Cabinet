<?php
header('Content-type:text/html;charset=utf-8');
error_reporting(0);
define ( 'SITE_PATH', getcwd () );
define ( 'THINK_PATH', SITE_PATH . '/ThinkPHP/' );
define ( 'APP_PATH', './Index/' );
define ( 'APP_NAME', 'index' );
define ('APP_DEBUG', false);
define('RUNTIME_PATH',APP_PATH.'Runtime/');

require THINK_PATH . 'ThinkPHP.php';