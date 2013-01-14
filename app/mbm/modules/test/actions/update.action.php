<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

echo session_id(); 
echo '<hr />';
print_r($_SESSION);
echo '<hr />';

$q = $DBR->find('TUsers',18);

if($q){
echo $q->getUsername();
$q->setUsername('user'.rand(1000,9000));
$DBR->persist($q);
$DBR->flush();
echo '<br />';
echo $q->getUsername();
}else{
    echo 'nothing found';
}

die();

render_template('userlogin.mbm', array('result' => $result));