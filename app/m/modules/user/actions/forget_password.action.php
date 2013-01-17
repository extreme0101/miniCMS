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
$post_forget_vars = Config::get('POST');

if(isset($post_forget_vars['forget']))
{
    echo $post_forget_vars['forget'];
    
      $DBR = Config::get('DBR');
        $qb = $DBR->createQueryBuilder();
        $qb->add('select','u')
             ->add('from','TUsers u');
             //->add('where', 'u.email = $post_forget_vars['forget']);

        $query = $qb->getQuery();
        $result = $query->getResult();
 
        $generate_pass = new User();
        $send_mail = new Email_Send();
      $new_pass = rand(1000,9000);  
      $message = 'Таны нууц үг : '.$new_pass;
  
        foreach ($result as $value) {
             if($value->getEmail() == $post_forget_vars['forget'])
             {
                 
                   if($send_mail ->Email_Send_Register($post_forget_vars['forget'], 'v3.az.mn', $message ,'v3@az.mn') == true)
                    {
                        $q = $DBR->find('TUsers',$value->getId());

                            $q->setPassword($generate_pass->generatePassword($new_pass , "NbHAasdaAdksd1oasd0", 'md5'))
                              ->setPasswordTmp($generate_pass->generatePassword($new_pass , "NbHAasdaAdksd1oasd0", 'md5'));
                            $DBR->persist($q);
                            $DBR->flush();


                        $result_txt = 'Sending your email ';
                        
                     }
                  //echo $value->getId();
             }
             else
             {
                 //echo "Not User";
             }
        }
    
}
render_template("forget_password.mbm" , array('result'=>$result_txt));