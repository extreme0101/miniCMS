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

$post_vars = Config::get('POST');

//$user = new User();

//echo $user->getUserByUsername('admin');
//die();
if(isset($post_vars['submitted']))
{
    if(Login($post_vars))
    {
        RedirectToURL("http://oluulaa/main/profile/index");
    }
}





//login shalgah
//if (is_array($post_vars)) {
//
//}




function Login($post){
    if(empty($post['username']))
    {
//        $this->HandleError("UserName is empty!");
        return false;
    }
    if(empty($post['password']))
    {
//        $this->HandleError("Password is empty!");
        return false;
    }

    $username = trim($post['username']);
    $password = trim($post['password']);

//    $user = $DBR->getRepository('TUsers')-> findOneBy(array('username' => $username));
//    $user->getId(); die();

    $user = array('admin');



    if(!$user || $user <= 0){
        return false;
    }
    return true;
}

function RedirectToURL($url)
{
    header("Location: $url");
    exit;
}

function GetErrorMessage()
{
    if(empty($this->error_message))
    {
        return '';
    }
    $errormsg = nl2br(htmlentities($this->error_message));
    return $errormsg;
}


//render_template('login.mbm', array('form' => new Form()));
render_template('login.mbm');
