<?php
/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$post_vars = Config::get('POST');


if(isset($post_vars['name'])){
    
    $test = new TTest();
    $test->setName($post_vars['name']);
    $test->setContent($post_vars['content']);
    $DBW->persist($test);
    $DBW->flush();
    
    $result = '#'.$test->getId().' inserted';
}
render_template('insert.mbm',array('test'=>1,'result'=>$result));