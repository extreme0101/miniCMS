<?php

/**
 * Ashilah bolomjtoi huvisagchuud
 * Config $config 
 * $template (Twig)
 */
/*
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

//use library\Models\TUsers as User;
//use Doctrine\ORM\EntityManager;

//die('login');


$post_vars = Config::get('POST');

//login shalgah

if (is_array($post_vars)) {

//    $user = $DBR->find('TCodes', 1);
//    $user = $this->getEntityManager()->createQuery('SELECT * FROM User');
    $user = $DBR->createQuery('SELECT * FROM User');
    echo $user;
    die();


//    print_r($user); die();
    echo $user->getResult();
    foreach($user as $a){
        echo $a->getUsername();
    }
    die();
}


Config::get('app');

$userLoginForm = Form::open(array(
            'action' => '',
            'method' => 'post',
            'name' => 'userLoginForm',
            'id' => 'userLoginForm'
        ));


$userLoginForm .= '<div>';
$userLoginForm .= '</div>';
$userLoginForm .= Form::close();
render_template('login.mbm', array('form' => new Form(),'user'=>$user));