<?php

/*
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
 * @subpackage Request
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class Request_Post extends Request {

    //POST iin buh utguudiin end onooj ugnu
    static $POST = array();

    public function __construct() {
        self::$POST = $_POST;
    }

    static function get() {
        if (isset($_POST)) {
            self::$POST = $_POST;
            return self::$POST;
        } else {
            return false;
        }
    }

}