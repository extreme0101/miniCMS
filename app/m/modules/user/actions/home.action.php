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
$_SESSION['uid'] = $_SESSION['user']['id'];
$logout_key = $_SESSION['password'];
    
if(isset($_SESSION['user']['id']) && ($_SESSION['user']['id']!=0))
{
    
  //  print_r($_SESSION);
                       $tUser = new TUserLoginHistory();
                       $tUser->setUserId($_SESSION['user']['id']);
                       //$tUser->setLoginDatetime(DateTime('Y-m-d H:i:s'));
                       $tUser->setLoginIp($_SERVER['REMOTE_ADDR']);

                       $DBW->persist($tUser);
                       $DBW->flush();
                        
    render_template('home.mbm', array('logout_key' => $logout_key));
}

else 
{
    $logout_user = new Routing();
    redirect_to($logout_user->convertTo('login'));
           
}
if(isset($GET['view']) && $GET['view']==2 )
{
    $b=0;
    $qb = $DBR->createQueryBuilder();
    $qb->add('select','u')
         ->add('from','TUsers u')
          ->add('where', 'u.id = '.$_SESSION['user']['id']);

    $query = $qb->getQuery();
    $result = $query->getResult();

     render_template('home.mbm', array('logout_key' => $logout_key, 'profile_view' => $result, 'b'=> $b));
}