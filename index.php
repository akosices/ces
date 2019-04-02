<?php
/**
 * INDEX FILE / ROUTING SCRIPT
 * ----
 * This script handles all the HTTP requests and passes all 
 * variables and data to page scripts using the include function.
 * 
 * By default all objects and classes defined in system/libraries/
 * are loaded automatically.
 * 
 */

/**
 * Define BASEPATH to ensure that this script is loaded first.
 */
define('BASEPATH', __DIR__);

/**
 * Require helper functions script
 */
require BASEPATH . '/vendor/autoload.php';
require BASEPATH . '/system/helpers.php';

/**
 * Define AUTOLOAD method for system classes
 */
spl_autoload_register(function($className) 
{
	$className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
	$parts = explode(DIRECTORY_SEPARATOR, $className);
	$namespace = implode(DIRECTORY_SEPARATOR, array_slice($parts, 0, -1)); 
	$className = array_slice($parts, -1)[0];

	$paths = [
		BASEPATH . '/system/libraries/',
		BASEPATH . '/' . strtolower($namespace) . '/'
	];

	foreach ($paths as $path)
	{
		if (file_exists($path . "{$className}.php"))
		{
            include_once $path . "{$className}.php";
            break;
        }
	}
});

/**
 * Start sessions
 */
if (!isset($_SESSION)) session_start();

/**
 * Route Handler
 * ----
 * Split the given url by '/' and find the specified file
 * inside the app/pages/ folder
 */
$uri = preg_replace('/^' . preg_quote(parse_url(base_url())['path'], '/') . '/', '', $_SERVER['REQUEST_URI']);
$segments = parse_url($uri);
include('app/pages/' . (empty($segments['path']) ? 'index' : $segments['path']) . '.php');