<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$api_user_key = post($_POST);
$api_user_secret = $session->getAttribute('user_token');
$api_user = new Api_User($api_user_key['user_api_key'], $api_user_secret);

if($api_user->is_allowed == 1){
    User::login();
}else{
    
}

