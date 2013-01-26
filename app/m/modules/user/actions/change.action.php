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

$result_txt='';

if(isset($post_register_vars['new_pass']))
{
    $generate_pass = new User();
    if($post_register_vars['new_pass'] == '' && $post_register_vars['conf_pass'] == '')
    {
        $result_txt = "Password-uudaa oruulna uu"; //!helnii function ashiglaj yavna. __('Text here')
    }
    else
    {   
        if($post_register_vars['new_pass'] == '')
        {
            $result_txt = "New password oruulna uu";
        }
        else if ($post_register_vars['conf_pass'] == '')
        {
            $result_txt = "Confirm password oruulna uu";
        }
        else
        {
            if($post_register_vars['new_pass'] == $post_register_vars['conf_pass'])
            {
                    $q = $DBR->find('TUsers',$_SESSION['user']['id']);
                    
                        $q->setPassword($generate_pass->generatePassword($post_register_vars['new_pass'] , "NbHAasdaAdksd1oasd0", $type='md5'));

                        $DBR->persist($q);
                        $DBR->flush();
                        $result_txt = "Successful Change Password";
                    

            }
            else
            {
                $result_txt = "password-uud ijil bish bna!!!!!!";
            }
        }
    }
        
}
render_template('change.mbm',array('result'=>$result_txt));
