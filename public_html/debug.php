<?php

define('TIME_START', microtime());
require_once '../library/bootstrap.php';
//display_layout('body');

highlight_string(display_layout('body'),false);

echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';

if(is_array(Config::get('POST'))){
    print_r(Config::get('POST'));
}

echo '<hr>';
echo 'TCodes oos songoj bna....<br >';
$ss = $Core->DBW->find('TCodes',2);
echo $ss->getName().'---';
echo '<hr>';
print_r($ss);
echo '<hr />';

echo '<br />';
echo '<br />';

/*
 * usert nemeh jishee
 
$ss = new TUsers();
//$ss->setName('aaa');
 $ss->setUsername("admin".rand(11,99));
 $ss->setIsConfirmed(1);
$Core->DBW->persist($ss);
$Core->DBW->flush();
 */


echo $ss->getId().'..<br />';
print_r($ss);
echo '<hr />';

echo '<br />';


//$sql = "SELECT * FROM t_users WHERE username=?";
//        $user = $Core->DBR->prepare($sql); // Simple, but has several drawbacks
//        $user->bindValue(1, 'system');
//        $user->execute();
//
//        
//        print_r($user);
        
echo '<hr />';
        
//if($session->login('admin','')){
//    echo 1;
//}else{
//    echo 2;
//}
echo '<hr />...';
print_r(Config::$data);
echo '<hr />';
unset($_SESSION['CrY']);
print_r($_SESSION);