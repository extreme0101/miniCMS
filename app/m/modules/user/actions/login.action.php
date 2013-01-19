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
$post_vars = Config::get('POST');
$result_txt='';
if($post_vars['t_username'])
{
     $user = Model_TUsers::getUserByUsername($post_vars['t_username']);
     $login_routing = new Routing();
//    $result = '#'.$test->getId().' inserted';

    if (count($user) == 1) {

        $password = User::generatePassword($post_vars['t_password'],$user[0]['salt']);
        
        if($password == $user[0]['password']){
                if($user[0]['st'] == 'active')
                {    
                   $u = new \User($user[0]);

                   if($u->login($user[0]['username'], $password, $user[0]['salt'])){
                       $result_txt = 'logged in';
                       redirect_to($login_routing->convertTo('home'));

                   }else{
                       $result_txt = 'Invalid login info';
                   }
               }else
               {
                   $result_txt = 'not active';
               }
        }else{
            $result_txt ='error pass';
        }
    } else {
        $result_txt = 'No such user found';
    }
    
}








/*


$post_login_vars = Config::get('POST');
$result_txt = '';
if(isset($post_login_vars['t_username1']))
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
*/
if(isset($GET['logout'])&& $GET['logout']== $_SESSION['password'])
{
			$log_out =new User();
                        if($log_out->logout() == true)
                        {
                            $result_txt = "You are now logged out.";
                        }
                        
}

    render_template('login.mbm',array('result'=>$result_txt));

?>
