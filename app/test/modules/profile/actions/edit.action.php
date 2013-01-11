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


load_js('test.js');
load_css('test.css');

//print_r($Core->user); die();
//
//if( !$Core->user->isLogged()){
    
    $post_vars = Config::get('POST');

    if(isset($post_vars['submitted']))
    {
        print_r($post_vars);
        die();
    }
    render_template('edit.mbm',array('aa'=>1));
//}else{
//    ol_RedirectToURL('test/test/userlogin');
//}



