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

load_layout('default');

load_js('jquery/jquery-1.7.2.min.js');
load_css('main.css');


$time_ago = ol_time_ago('2012-12-12 11:49:16');
$name = ol_slugify('TEST');
$search_people = search_people();


//echo $search_people; die();
//return $time_ago;


render_template('first.mbm',array('name'=>$name,'time_ago'=>$time_ago));