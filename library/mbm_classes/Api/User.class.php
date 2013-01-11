<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

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
class Api_User extends Api {

    var $api_key;
    var $api_secret;
    var $is_allowed = 0;

    /**
     * @param type $name Description
     * @param String $api_secret : Tuhain hereglegchiin token
     */
    public function Api_User($api_key = '', $api_secret = '') {

        $this->api_key = $api_key;
        $this->api_secret = $api_secret;
        $this->checkApiAccess();
    }

    /**
     * @param type $name Description
     */
    public static function checkApiAccess() {
        $u = Doctrine::getTable('t_users')
                ->createQuery('a')
                ->where('user_token=?', $this->api_secret)
                ->where('api_key=?', $this->api_key)
                ->fetchOne();

        if ($u->count() == 1) {
            $this->is_allowed = 1;
        }
    }

}