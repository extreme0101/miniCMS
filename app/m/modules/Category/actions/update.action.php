<?php

$post_vars = Config::get('POST');

if(isset($post_vars['catName']))
{
    $q = $DBW->find('TCategories', $post_vars['id']);
    if($q)
    {
        $q->setName($post_vars['catName']);
        $q->setParentId($post_vars['owner']);
        $DBW->persist($q);
        $DBW->flush();
        header('Location: select');
    }
}