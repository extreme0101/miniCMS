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

$post_profile_vars = Config::get('GET');

$post_profile_edit_vars = Config::get('POST');
$result_txt = '';

if(isset($post_profile_vars['edit']) && $post_profile_vars['edit'] == 'asdlKLKKLLjafdsdJHYsdaHYj')
{
    $DBR = Config::get('DBR');
     
   $qb = $DBR->createQueryBuilder();
    $qb->add('select','u')
         ->add('from','TUsers u')
          ->add('where', 'u.id = '.$_SESSION['user']['id']);

    $query = $qb->getQuery();
    $result = $query->getResult();
  
}
else
{
    $result_txt = "Hacking attampt :P Again";
}

if(isset($post_profile_edit_vars['u_username']))
{
         
                        $q = $DBR->find('TUsers',$_SESSION['user']['id']);
                    
                        $q->setUsername($post_profile_edit_vars['u_username'])
                           ->setEmail($post_profile_edit_vars['u_email']);

                        $DBR->persist($q);
                        $DBR->flush();
                        $result_txt = "Successful";
                   
}
render_template('profile.mbm', array('profile_view' => $result , 'result' => $result_txt));

