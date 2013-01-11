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
    if(RegisterUser($post_vars))
    {
        RedirectToURL("http://oluulaa/main/profile/index");
    }
}


function RegisterUser($post_vars)
{
    die($post_vars['submitted']);
    if(!isset($post_vars['submitted']))
    {
        return false;
    }

    $formvars = array();

    if(!ValidateRegistrationSubmission())
    {
        return false;
    }

    CollectRegistrationSubmission($formvars);

    if(!SaveToDatabase($formvars))
    {
        return false;
    }

    if(!SendUserConfirmationEmail($formvars))
    {
        return false;
    }

    SendAdminIntimationEmail($formvars);

    return true;
}



function RedirectToURL($url)
{
    header("Location: $url");
    exit;
}

function ValidateRegistrationSubmission()
{
    print_r($_POST); die();
    if(!empty($_POST[$this->GetSpamTrapInputName()]) )
    {
        return false;
    }

    $validator = new FormValidator();
//    $validator->addValidation("name","req","Please fill in Name");
    $validator->addValidation("email","email","The input for Email should be a valid email value");
    $validator->addValidation("email","req","Please fill in Email");
    $validator->addValidation("username","req","Please fill in UserName");
    $validator->addValidation("password","req","Please fill in Password");


    if(!$validator->ValidateForm())
    {
        $error='';
        $error_hash = $validator->GetErrors();
        foreach($error_hash as $inpname => $inp_err)
        {
            $error .= $inpname.':'.$inp_err."\n";
        }
        $this->HandleError($error);
        return false;
    }
    return true;
}


die('register');
//render_template('login.mbm', array('form' => new Form()));
//render_template('login.mbm');
