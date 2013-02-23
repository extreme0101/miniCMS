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

/**
 * 
 * @return int User check session
 */

function is_logged_user(){
    
//    $user = Config::get('user');
//    
//    return $user->user_id;
//    print_r($_SESSION['user']); die();
    $user = $_SESSION['user'];
    if((int)$user['id'] > 0){
        
        return 1;
    }else{
        return 0;
    }
    
}

function get_logged_user_info($case='id'){
    
    $user = $_SESSION['user'];
   
    if(isset($user[$case])){
        
        return $user[$case];
    }else{
        return null;
    }
    
}


/**
 * 
 * @param user_id
 * @param string $item_type
 * 
 * @return array User Profiles
 */
    

//function user_profiles($id, $item_type){
////    global $Core,$DBCR;
//    if($id){
//        $r = $Core->BDCR;
//        
//        $qb = $DBCR->createQueryBuilder();
//        
//        $qb->add('select', 'u')
//            ->add('from', 'TUserProfiles u')
//            ->add('where', 'u.userId = :id');
//        if($item_type){
//            $qb->add('where', 'u.itemType = :item_type');
//        }
//        $qb->setParameters(array('id'=>$id));
//
//        if($item_type){
//            $qb->setParameters(array('item_type'=>$item_type));
//        }
//
//        $q = $qb->getQuery();
//        
//        return $results = $q->getResult();
//    }
//}

//function search($keyword){
//    if($keyword){
//        
//        return false;
//    }
//    return false;
//}
































