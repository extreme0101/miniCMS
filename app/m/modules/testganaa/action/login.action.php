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
$post_login_vars = Config::get('POST');
$result_txt = '';
if(isset($post_login_vars['t_username']))
{
    $login_routing = new Routing();
    
    $login_user = new User();
    
    $DBR = Config::get('DBR');
        $qb = $DBR->createQueryBuilder();
        $qb->add('select','u')
             ->add('from','TUsers u');

        $query = $qb->getQuery();
        $result = $query->getResult();
    
    
    
    if($post_login_vars['t_username']=='' && $post_login_vars['t_password'] == '')
    {
        $result_txt = "Ta username passwordoo oruulna uu";
    }
    else
    {
        if($post_login_vars['t_username']=='')
        {
            $result_txt = "Ta username oruulna uu";
        }
        else if($post_login_vars['t_password'] == '')
        {
            $result_txt = "Ta password oruulna uu";
        }
        else
        {
            $logged = $login_user->login($post_login_vars['t_username'], $post_login_vars['t_password'], 'NbHAasdaAdksd1oasd0');
            foreach ($result as $value) {
            if($value->getUsername() == $post_login_vars['t_username'])
            {    
                if($value->getst() == 'active')
                {
                    if($logged == true)
                    {
                        redirect_to($login_routing->convertTo('home'));
                    }
                    else
                    {
                        $result_txt = "username or password invalid";
                    }
                }
                else {
                        echo "Failed Register";
                }
            }
          }
        }
    }
}

if(isset($GET['logout'])&& $GET['logout']== $_SESSION['password'])
{
			$log_out =new User();
                        if($log_out->logout() == true)
                        {
                            $result_txt = "You are now logged out.";
                        }
                        
}
    print_r($_SESSION);

    render_template('login.mbm',array('result'=>$result_txt));

?>
