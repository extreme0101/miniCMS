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
//$query = $DBR->getRepository('TCodes')->findBy(array('name'=>'%pho%'));
//$query = $DBR->getRepository('TCodes')->findBy(array());

//$query = $DBR->createQuery("SELECT u from TCodes u WHERE u.id=!0")->getResult();

//$query = $DBR->createQuery('SELECT t.id FROM TCodes t')->getResult();
//$query = $DBR->getRepository('TCodes')->findAll();
//$query = $DBR->getRepository('TCodes')->findBy(array());

print_r($_SESSION);
die('asd');

$query = $DBR->getRepository('TCodes')->findAll();

foreach($query as $q){
    echo $q->getName().'<br />';
}
echo '<hr />';
die();

$query = $DBR->getRepository('TCodes')->createQueryBuilder();

foreach($query as $q){
    echo $q->getName().'<br />';
}
echo '<hr />';
die();
render_template('index.mbm',array('test'=>1,'users'=>$query));