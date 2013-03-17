<?php

/*
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (ini_get('session.save_handler') != 'user') {
//	ini_set( 'session.save_handler', 'user' );
}
ini_set("url_rewriter.tags", "");
ini_set("gd.jpeg_ignore_warning", 1);
//ini_set('session.cookie_lifetime', 2880);
//ini_set('session.use_cookies',true);
//header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
//header("Expires: Thu, 1 Oct 2009 04:00:00 GMT"); // Date in the past

error_reporting(E_ALL ^ E_NOTICE);
//error_reporting( E_ALL );

define('DS', DIRECTORY_SEPARATOR);

define('ABS_DIR', substr(dirname(__FILE__), 0, -7));
define('TEMPLATE_DIR', ABS_DIR . 'templates' . DS);
define('LIB_DIR', ABS_DIR . 'library' . DS);
//define('TMP_DIR', ABS_DIR . 'tmp' . DS);
//define('CACHE_DIR', ABS_DIR . 'cache' . DS);
//define('LOG_DIR', ABS_DIR . 'log' . DS);
//session_save_path(TMP_DIR.'sessions'.DS);
//media folders. relative to domain
define('CSS_DIR', DS . 'css' . DS);
define('JS_DIR', DS . 'js' . DS);
define('IMAGE_DIR', DS . 'images' . DS);

//Language
define('LANG_DEFAULT', 'mn');
define('LANG_DIR', ABS_DIR . 'lang' . DS);

//system iin undsen APP
define('SYSTEM_APP_NAME', 'system');
define('SYSTEM_APP_DIR', ABS_DIR . 'app' . DS . 'system' . DS);
//system iin undsen APP-d hamaaragdah aldaa medeeleh module
define('ERROR_MODULE_NAME', 'error');
define('ERROR_MODULE_DIR', SYSTEM_APP_DIR . 'modules' . DS . ERROR_MODULE_NAME . DS);
//system iin undsen APP-d hamaaragdah error module iin action
define('PAGE_NOT_FOUND_ACTION', '404');

require_once(LIB_DIR . 'mbm_functions' . DS . 'common.function.php');
require_once (LIB_DIR . 'mbm_classes' . DS . 'Core.class.php');
require_once (ABS_DIR . 'config' . DS . 'main.php');
require_once (ABS_DIR . 'config' . DS . 'other.php');
require_once(ABS_DIR . 'config' . DS . 'routing.php');

global $session, $config, $log, $Core, $GET, $POST;


/* @var undsen tohirgoog idevhjuulj bna */
$Core = new Core($mbm_config);

//inlcude mbm_functions
File::getAndIncludePHPFiles(LIB_DIR.'mbm_functions'.DS);

//rewrite module zoriulan GET-g tohiruulah
$GET = $Core->GET;
$POST = $Core->POST;

$DBW = $Core->DBW;
$DBR = $Core->DBR;
$DBCW = $Core->DBCW;
$DBCR = $Core->DBCR;

date_default_timezone_set(TIME_ZONE);

$session = $Core->session;
$config = $Core->config;
//$config = new Config();
$user = $Core->user;

/* * ***********Starting up************ */

$log = new Log('<h2>' . session_id() . ' (' . date('Y-m-d H:i:s') . ')</h2>');

$Core->Template;

Config::set('Core', $Core);
