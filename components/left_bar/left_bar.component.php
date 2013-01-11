<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
//1 Query builder beltgene
//die('left');


$qb = $DBR->createQueryBuilder();

//2. heregtei command aa beldej oruulna
$qb->add('select', 'u')
   ->add('from', 'TUserProfiles u')
   ->add('where', 'u.userId = :id');
//   ->add('orderBy', 'u.name ASC');
//die($qb);
//3. parameter uudiig tohiruulna
$qb->setParameters(array('id'=>'35'));

//echo $qb->getType();

//$dql = $qb->getDql();
//echo $dql.$br;

//4. query ee gargaj avna
$q = $qb->getQuery();


//5. ur dung avna.
$result = $q->getResult();

foreach ($result as $r) {
    echo $r->getUserId()."<br/>";
    echo $r->getName()."<br/>";
}

die();
render_template('header/header.mbm', array('lang' => $lang), 'comp_left_bar');