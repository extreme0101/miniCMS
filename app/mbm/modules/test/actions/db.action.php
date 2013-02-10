<?php
/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

echo DB::$status;

//$_qb = DB::getInstance()->DBW;
$_qb = Config::get('DBW');
$qb = $_qb->createQueryBuilder();
$qb->add('select', 'u')
   ->add('from', 'TTest u');

$q = $qb->getQuery();
//5. ur dung avna.
$result = $q->getResult();

render_template('db.mbm',array('test'=>1,'result'=>$result));