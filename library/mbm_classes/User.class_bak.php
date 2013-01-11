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
 * @subpackage User
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class User extends Core {

    public $lang = 'mn';
    public $user_id;
    public $is_logged_in = 0;
    public $default_credentials = array();
    public $user_info = array();

    public function User($user_info = array()) {

        session_start();
        
        $this->session = new Storage_Session(array(
            'session_id'=>session_id()
        ));

        $this->setLang();
        if ((int) $user_info['id'] > 0) {
            $this->user_id = $user_info['id'];
            $this->setPrivateAttribute($user_info);
        }else{
            $this->user_id = 0;
        }
        
        $this->setAttribute('user_id', $this->user_id);
        $this->default_credentials = array(
            'admin' => 'admin',
            'superadmin' => 'superadmin',
            'operator' => 'operator',
            'moderator' => 'moderator'
        );

        $this->setConfig();
        $user_credentials = new User_Credentials(__CLASS__);
        //$this->setAttribute('CrY', $user_credentials->setCrY());
    }

    public function setLang() {
        if ($this->getAttribute('ln') == null || !is_dir(ABS_DIR . "lang/" . $this->session->read('ln') . "/")) {
            $this->setAttribute('ln', DEFAULT_LANG);
        }
        $this->lang = $this->getAttribute('ln');
    }

    public function getLang() {

        return $this->session->read('ln');
    }

    /**
     * @param $user_id 
     * 
     * @return none
     */
    public function setUserId($user_id = 0) {

        $this->user_id = $user_id;
    }

    /**
     * _SESSION ees hereglegchiin id g avah
     */
    public function getUserId() {

        return $this->user_id;
    }

    /**
     * @param $key
     * @param $data
     * 
     * @return
     */
    public function setAttribute($key, $data) {

        return $this->session->write($key, $data);
    }

    /**
     * @param $key
     * 
     * @return herev tuhain key bhgui bol null butsaana
     */
    public function getAttribute($key) {

        return $this->session->read($key);
    }

    /**
     * @param $key
     * 
     * @return
     */
    public function removeAttribute($key) {

        return $this->session->remove($key);
    }

    /**
     * @param
     * @return array()
     */
    public function getPrivateAttribute($key = 'username') {
        $user_session = $this->session->read('user');

        if (isset($user_session[$key])) {

            return $user_session[$key];
        } else {

            return null;
        }
    }

    /**
     * zuvhun tuhain hereglegchtei hamaaraltai medeelliig array bolgoj oruulna. (_SESSION['user'])
     * 
     * @param Array $values Hereglegchiin medeelel array helberteigeer ugnu
     * 
     * @return
     */
    public function setPrivateAttribute($values = array('name' => 'Guest', 'username' => 'guest', 'id' => 0)) {

        $user = $this->getAttribute('user');
        if (is_array($values)) {
            foreach ($values as $k => $v) {
                $user[$k] = $v;
            }

            return $this->setAttribute('user', $v);
        }

        return false;
    }

    /**
     * @return boolean
     */
    public function sessionDestroy() {

        $this->session->shutdown();
        $this->session->regenerate(true);

        return true;
    }

    /**
     * @param String $password Nuuts ug
     * @param String $salt Nuuts ug salt
     * @param String $algorithm Nuuts ug hurvuuleh algorithm
     * @return boolean
     */
    public function generatePassword($password, $salt, $algorithm = 'md5') {

        $pass = '';

        switch ($algorithm) {
            case 'md5':
                $pass = md5($password . $salt);
                break;

            //default n md5
            default:
                $pass = md5($password . $salt);
                break;
        }

        return $pass;
    }

    /**
     * @return boolean
     */
    public function loginViaToken($token = '') {

        if (strlen($token) == 64 || strlen($token) == 32) {
            
        }

        return false;
    }

    /**
     * Herelegchiin logged in session iig uusgeh
     * 
     * @param Array $user : User object iig damjuulna
     * 
     * @return boolean
     */
    public function generateLoggedSession($user) {

        $_SESSION['user_id'] = $user['id'];
//        if (strlen($token) == 64 || strlen($token) == 32) {
        $this->setAttribute('user_id', $user['id']);
        $this->setAttribute('username', $user['username']);
        $this->setAttribute('password', $user['password']);
        $this->setAttribute('token', $user['token']);
//        }

        return false;
    }

    /**
     * @return boolean
     */
    public function isLogged() {

        if ((int) $this->user_id > 0) {

            return 1;
        } else {

            return 0;
        }
    }

    /**
     * @return boolean
     */
    public function login($username, $password, $salt) {
//        $username, $password, $salt;
        $user = array('username' => $username, 'password' => $password, 'salt' => $salt);
//        print_r($user); die();

        $u = Model_TUsers::getUserByUsername($user['username']);

        if (count($u) == 1) {
            $user['token'] = $u[0]['token'];
            $user['password'] = $u[0]['password'];
            
            $this->generateLoggedSession($user);
            $this->setPrivateAttribute(array(
                'name' => $user['username'],
                'username' => $user['username'],
                'id' => $u[0]['id'] #$user['id']
            ));
            $this->setUserId($this->getPrivateAttribute('id'));
            $this->setAttribute('user_id', $u[0]['id']);
            
            $this->user_id = $u[0]['id'];
            
            $this->setConfig();
            
            return true;
        } else {
            $this->logout();
        }

        return false;
    }

    /**
     * @return boolean
     */
    public function logout() {

        if ($this->getAttribute('user_id') > 0) {

            $this->removeAttribute('user_id');
            $this->removeAttribute('username');
            $this->removeAttribute('password');
            $this->removeAttribute('token');
            $this->removeAttribute('user');

            $this->setPrivateAttribute(array(
                'name' => 'Guest',
                'id' => 0
            ));
            
            $this->user_id = 0;

            return true;
        }

        return false;
    }

    /**
     * @param String $username : User iig avah
     * @return boolean
     */
    public function getUserByUsername($username) {

        $r = Doctrine::getTable('t_user')
                ->createQuery('a')
                ->where('username=?', $username)
                ->fetchOne();

        if ($r) {
            return $r;
        } else {

            return false;
        }
    }
    /**
     * Config::set() -iig ashinechilne
     * 
     * @return nonne
     */
    public function setConfig() {
       
        Config::set('user', $this);
    }

}