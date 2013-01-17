<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$cat = new Model_TCategories();
$result = $cat->getAllCategories();

$get_vars = Config::get('GET');
if(isset($get_vars['id']))
{
    $selectValues = $cat->getCategory($get_vars['id']);
    foreach ($selectValues as $currVal)
    {
        $currentCatName = $currVal->getName();
        $parrentId = $currVal->getParentId();
    }
    
    render_template('update.mbm', array('allCat'=>$result,'id'=>$get_vars['id'], 'currentCatName'=>$currentCatName, 'parentId'=>$parentId));
}
else
{
    render_template('select.mbm', array('catList' => $result));
}
    