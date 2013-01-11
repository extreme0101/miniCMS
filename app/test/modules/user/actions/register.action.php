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


//$session = new User($_SESSION);
//print_r($session); die();
//$post_vars = Config::get('POST');
//if(isset($post_vars['submitted'])){
//    
//    $test = new TTest();
//    $test->setName($post_vars['submitted']);
//    $DBW->persist($test);
//    $DBW->flush();
//    
//    $result = '#'.$test->getId().' inserted';
//}
//die('success');

//use FormValidator();

$post_vars = Config::get('POST');
    print_r($_SESSION); 
//    print_r($_COOKIE); 
    die();
//static $HandleError;
if(isset($post_vars['submitted']))
{
//    $validator = new FormValidator();
//addValidation("username","req","username");
//    
//    if(!$validator->ValidateForm())
//    {
//        die();
//    }
//        die();
//    die(':D');
//    $validator->addValidation("username","req","username");
//    
//    if(!$validator->ValidateForm())
//    {
//        die();
//    }
//        die();
    
//    if(empty($post_vars['username']))
//    {
////        $this->HandleError("UserName is empty!");
//        return false;
//    }
//    if(empty($post_vars['password']))
//    {
//        $this->HandleError("Password is empty!");
//        return false;
//    }
//
//    $username = trim($_POST['username']);
//    $password = trim($_POST['password']);
//    die('register action');
//    print_r($post_vars['email']);die();

    $salt = rand(1111,9999);
    $password = User::generatePassword($post_vars['password'],$salt);
//    echo date("Y-m-d");
//    echo "<br/>";
//    
//    echo $password;
//    
//    die();
    
    $user = new TUsers();
    
    $user->setToken(md5($post_vars['email'].rand(1111, 9999)));
    $user->setEmail($post_vars['email']);
    $user->setUsername($post_vars['email']);
    $user->setPassword($password);
    $user->setSalt($salt);
    $user->setHashFunction('md5');
//    $user->setCreatedAt('2012-11-14');
//    $user->setConfirmedAt('2012-11-14');
    $user->setIsConfirmed(1);
    $user->setUserType('User');
    
    $DBW->persist($user);
    $DBW->flush();
    
//    echo $result = '#'.$user->getId().' inserted';
}

ol_RedirectToURL('/test/profile/index');

//die('register action<br/>success');
//
//function checkField($var){
//    if(empty($var))
//    {
//        $this->HandleError("UserName is empty!");
//        return false;
//    }
//}

//render_template('register.mbm',array('test'=>1,'result'=>$result));


