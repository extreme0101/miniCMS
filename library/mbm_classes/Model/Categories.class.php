<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Categories extends TCategories
{
    public function getAllCategories()
    {
        $qb = $DBR->createQueryBuilder();
        $qb->add('select','cat')
             ->add('from','TCategories cat');

        $query = $qb->getQuery();
        $result = $query->getResult();
        return $result;
    }
}