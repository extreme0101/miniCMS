<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
use Doctrine\ORM\Query;

class Config_Action extends Config {

    public $config;
    public $session;
    public $log;
    public $GET;
    public $POST;
    public $Core;
    public $lang;

    public function Config_Action($name) {
        if ($name == '' || $name == null) {
            $name = DEFAULT_ACTION;
        }

        $this->Core = Config::get('Core');
//        $this->config = $this->Core->config;
//        $this->session = $this->Core->session;
//        $this->log = $this->Core->log;
//        $this->GET = $this->Core->GET;
//        $this->POST = $this->Core->POST;
//        $this->DBW = $this->Core->DBW;
//        $this->DBR = $this->Core->DBWR;
//        $this->DBCW = $this->Core->DBCW;
//        $this->DBCR = $this->Core->DBCR;

        $this->setAction($name);
    }

    public function setAction($name) {

        global $POST, $GET, $Core, $session, $user, $log,$config;

        $DBW = Config::get('DBW');
        $DBR = Config::get('DBR');
        $DBCW = Config::get('DBCW');
        $DBCR = Config::get('DBCR');
//        $Core = Config::get('action');

        $template = $config->template;

        //ug app,module bgaa tohioldold ajillana. umnu not_found_page==true bolson bol ajillahgui
        if (Config::get('not_found_page') == false) {
            //action bgaa tohioldold
            if (file_exists(Config::get('module_dir') . 'actions' . DS . $name . '.action.php')) {
                $this->setActionValues($name);
                new Config_Template();
                require_once(Config::get('module_dir') . 'actions' . DS . $name . '.action.php');
            } else {
                Log::save($name . ' action not found.', 1);
                Config::setNotFoundPage();
            }
        } else {
            Config::setNotFoundPage();
        }
    }

    public function setActionValues($name) {

        Config::set('action', $name);
        Log::save('Config[action] set to ' . $name . ' (' . Config::get('action') . ')');

        Config::set('template_filepath', Config::get('action'));
        Log::save('Config[template_filepath] set to ' . $name . ' (' . Config::get('template_filepath') . ')');

        Config::set('action_file', Config::get('action'));
        Log::save('Config[action_file] set to ' . $name . ' (' . Config::get('action_file') . ')');
    }

}