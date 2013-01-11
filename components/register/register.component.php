<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$lang = array(
    //menu nii title uud
    'test'=>__('Content Management'),
);

render_template('other/register.mbm', array('lang' => $lang,'a'=>$a), 'comp_register');