<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2013 Tugsbayar Buyadaa <tgs19g@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

load_js('lib/adsfasd.js'); //!ene hereggui bol arilgah

$catList = new Model_TCategories();
$allCat = $catList->getAllCategories();

$post_vars = Config::get('POST');

if(isset($post_vars['catName']))
{
    $aCategory = new TCategories();
    $aCategory->setParentId($post_vars['owner']);
    $aCategory->setAddedBy(get_logged_user_id());
    $aCategory->setName($post_vars['catName']);
    
    $rgt = 2;
    $depth = 0;
    
    $par = $DBW->find('TCategories', $post_vars['owner']);
    $depth = $par->getDepth() + 1;
    $rgt = $par->getRgt();
    $lft = $par->getLft();
    
    
    foreach($allCat as $catOne)
    {
        $r1 = $catOne->getRgt();
        $l1 = $catOne->getlft();
        
        if($r1 >= $rgt)
        {
            $r1 += 2;
        }
        
        if($l1 >= $rgt)
        {
            $l1 += 2;
        }
            
        $catList->updateTree($catOne->getId(), $l1, $r1);
    }
    
    $aCategory->setDepth($depth);
    $aCategory->setLft($rgt);
    $aCategory->setRgt($rgt + 1);
    
    $aCategory->setLang("mn");
    $aCategory->setPos(1);
    $aCategory->setHits(0);
    $aCategory->setSt(0);
    $aCategory->setContentType("text");
    $aCategory->setAttrHref('');
    $aCategory->setAttrOnclick('');
    $aCategory->setAttrTarget('');
    $aCategory->setAttrTitle('');
    
    $DBW->persist($aCategory);
    $DBW->flush();
    
    $result = '#'.$aCategory->getId().' inserted';
}
render_template('insert.mbm',array('result'=>$result, 'allCat'=>$allCat));