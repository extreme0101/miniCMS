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




$userLoginForm = Form::open(array(
    'action' => '/test/user/login',
    'method' => 'post',
    'name' => 'userLoginForm',
    'id' => 'userLoginForm',
));

$userLoginFormClose = Form::close();

$rand = getTokenMd5(rand(1111,9999));

$hidden = Form::input(array(
    'type'=> 'hidden',
    'id'=> 'submitted',
    'class'=> '',
    'name'=> 'submitted',
    'value'=> $rand,
));



render_template('other/login.mbm',
    array(
        'form_open' => new Form(),
        'form_open'=>$userLoginForm,
        'form_close'=>$userLoginFormClose,
        'hidden'=>$hidden,
        ),'comp_login');


function getTokenMd5($token)
{
    return md5($token);
}


