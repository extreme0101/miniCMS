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
//die('asd');
//1 Query builder beltgene
//print_r($_SESSION);
//die();


 
$qb = $DBR->createQueryBuilder();

//2. heregtei command aa beldej oruulna
$qb->add('select', 'u')
   ->add('from', 'TUserProfiles u')
   ->add('where', 'u.userId = :id');
//   ->add('orderBy', 'u.name ASC');
//die($qb);
//
//3. parameter uudiig tohiruulna

$qb->setParameters(array('id'=>'35'));

//echo $qb->getType();

//$dql = $qb->getDql();
//echo $dql.$br;

//4. query ee gargaj avna
$q = $qb->getQuery();


//5. ur dung avna.
$results = $q->getResult();

//foreach ($result as $r) {
//    echo $r->getUserId()."<br/>";
//    echo $r->getName()."<br/>";
//}
//
//die();

foreach($results as $result){
//    echo $result->getValue();
    if($result->getName() == 'firstname'){
        $firstname = $result->getValue();
    }elseif($result->getName() == 'lastname'){
        $lastname = $result->getValue();
    }elseif($result->getName() == 'lastname'){
        $lastname = $result->getValue();
    }
}

//print_r($firstname);
//print_r($lastname);
//die();
//die();
$time_ago = ol_time_ago('2012-12-12 11:49:16');
$name = ol_slugify('TEST');
//$search_people = search_people();
//echo $search_people; die();
//print_r($result); die();
//die();
render_template('index.mbm',array('results'=>$results,'firstname'=>$firstname,'lastname'=>$lastname));