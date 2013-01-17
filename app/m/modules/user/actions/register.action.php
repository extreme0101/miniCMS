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
 * @author     Batbayar Gantulga <b.gantulga0101g@gmail.com>
 * @version    SVN: $Id 
 */
$post_register_vars = Config::get('POST');
$send_mail = new Email_Send();
$result_txt='';
if(isset($post_register_vars['u_text']))
{    
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*.(\.[a-z]{2,3})$/'; 
    if($post_register_vars['u_text'] =='' || $post_register_vars['u_password'] =='' || $post_register_vars['u_email'] =='' || $post_register_vars['u_confirm_password'] =='' )
    {
      $result_txt = "Ta medeellee dutuu oruulsan bna";  
    }
    else
    {
        if (preg_match($regex, $post_register_vars['u_email'])) 
        {
            
            if($post_register_vars['u_password'] == $post_register_vars['u_confirm_password'])
            {
             $tUser = new TUsers();
             $generate_pass = new User();


            $tUser->setUserId(0);
            $tUser->setToken(1);
            $tUser->setSt('inactive');
            $tUser->setUsername($post_register_vars['u_text']);
            $tUser->setPassword($generate_pass->generatePassword($post_register_vars['u_password'] , "NbHAasdaAdksd1oasd0", $type='md5'));
            $tUser->setSalt('NbHAasdaAdksd1oasd0');
            $tUser->setEmail($post_register_vars['u_email']);
            
           
            $DBW->persist($tUser);
            $DBW->flush();
            $message = 'Та дараах линк хаягаар орж бүртгэллээ баталгаажуулна уу
                         http://www.v3.az.mn/m/user/register_confirm/user_conf/'.$post_register_vars['u_text'].'/id/'.$tUser->getId();

            if($send_mail ->Email_Send_Register($post_register_vars['u_email'], 'v3.az.mn', $message ,'v3@az.mn') == true)
            {
                $result_txt = 'Amjilttai burtgegdlee. Email hayagaa shalgaj batalgaajilt hiinuu!'; 
            }
           }
        else
        {
            $result_txt = "Confirm password or Password invalid";
        }
    } 
    else 
    { 
         $result_txt='Invalid email address';
     }
        
    }
}

render_template('register.mbm',array('result'=>$result_txt));

if(isset($GET['user_conf']))
{
    echo $GET['user_conf'];
    
}