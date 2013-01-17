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
if(isset($GET['user_conf']) && $GET['id'])
{
    $q = $DBR->find('TUsers',$GET['id'] );
    if($q)
    {
        //echo $q->getst();
        $q->setst('active');
        $DBR->persist($q);
        $DBR->flush();
        //echo '<br />';
        //echo $q->getst();
        echo "Successful Register";
    }
    else
    {
        echo 'FUCK!!! HACKING ATTEMPT :P Again :D';
    }

    die();

}
render_template('register_confirm.mbm',array('result'=>$result_confirm));
