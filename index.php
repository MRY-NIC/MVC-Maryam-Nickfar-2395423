<?php 
error_reporting(E_ALL & ~E_NOTICE);
require_once('config/config.php');
require_once('lib/core.php');

$module = isset($config['controller']) ? safe($_REQUEST['controller']) : (isset($config['default_controller']) ? $config['default_controller'] : '');
$action = isset($_REQUEST['function'])?safe($_REQUEST['function']): '';

$controller_file = 'controllers/'.ucfirst($module).'Controller.php';

if(!file_exists($controller_file) || !is_readable($controller_file)) {
    trigger_error('Controlleur invalide');
    exit;
}

require_once($controller_file);
$function = strtolower($module).'_controller_'.$action;

if(!function_exists($function)) {
    // چک تعریف تابع
    die;
}

call_user_func($function, $_REQUEST);
?>