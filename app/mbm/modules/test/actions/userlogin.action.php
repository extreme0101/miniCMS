<?php


/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$post_vars = Config::get('POST');
//use
echo session_id();
echo '<hr />';
//echo $Core->user->getAttribute('user_id').'-';
echo is_logged_user().'<hr />';

if (isset($post_vars['login'])) {
    
    $user = Model_TUsers::getUserByUsername($post_vars['username']);

//    $result = '#'.$test->getId().' inserted';

    if (count($user) == 1) {

        $password = User::generatePassword($post_vars['password'],$user[0]['salt']);
        
        if($password == $user[0]['password']){
            
            $u = new \User($user[0]);

            if($u->login($user[0]['username'], $password, $user[0]['salt'])){
                $result = __('logged in');
                
                print_r($_SESSION); echo '<br />'.session_id().'<hr >';
//                ol_RedirectToURL('/test/profile/index');
            }else{
                $result = __('Invalid login info');
            }
        }
    } else {
        $result = __('No such user found');
    }
}

$form = '<form action="" method="post">
    <input type="text" name="username" size="30" />username <br /> 
    <input type="password" name="password" size="30" />password <br /> 
    <input type="submit" name="login" value="login" />
</form>';
render_template('userlogin.mbm', array('sessions' => $_SESSION, 'result' => $result, 'form' => $form));
