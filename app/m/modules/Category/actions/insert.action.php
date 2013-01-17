<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2013 Tugsbayar Buyadaa <tgs19g@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$catList = new Model_TCategories();
$allCat = $catList->getAllCategories();

$post_vars = Config::get('POST');

if(isset($post_vars['catName']))
{
    $aCategory = new TCategories();
    $aCategory->setParentId($post_vars['owner']);
    $aCategory->setAddedBy(get_logged_user_id());
    $aCategory->setName($post_vars['catName']);
    
    if($post_vars['owner'] == 0)
        $aCategory->setDepth(1);
    else
    {
        $depth = "";
        $aCat = $catList->getCategory($post_vars['owner']);
        foreach($aCat as $par)
        {
            $depth = $par->getDepth() + 1;
            
        }
        $aCategory->setDepth($depth);
    }
    
    $aCategory->setLft(1);
    $aCategory->setRgt(1);
    
    $aCategory->setLang("eng");
    $aCategory->setPos(1);
    $aCategory->setHits(0);
    $aCategory->setSt("st");
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


