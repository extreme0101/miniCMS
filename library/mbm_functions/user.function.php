<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


function is_logged_user(){
    
//    $user = Config::get('user');
//    
//    return $user->user_id;
    
    $user = $_SESSION['user'];
    if((int)$user['id'] > 0){
        
        return 1;
    }else{
        return 0;
    }
    
}

function get_logged_user_id(){
    
//    return $_SESSION['user_id'];
    
    return 1;
}