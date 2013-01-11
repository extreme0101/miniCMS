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

//1 Query builder beltgene
$qb = $DBR->createQueryBuilder();

//2. heregtei command aa beldej oruulna
$qb->add('select', 'u')
   ->add('from', 'TTest u')
   ->add('where', 'u.id != ?1')
   ->add('orderBy', 'u.name ASC');

//3. parameter uudiig tohiruulna
$qb->setParameters(array(1=>'2a'));

//echo $qb->getType();

//$dql = $qb->getDql();
//echo $dql.$br;

//4. query ee gargaj avna
$q = $qb->getQuery();


//5. ur dung avna.
$result = $q->getResult();

//foreach ($result as $r) {
//    echo $r->getName().$br;
//}
//print_r($q->getResult());


render_template('userlogin.mbm', array('result' => $result));