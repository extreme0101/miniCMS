<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * This file is part of the miniCMS package.
 * (c) 2013 Tugsbayar Buyadaa <tgs19g@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     Tugsbayar Buyadaa <tgs19g@gmail.com>
 * @version    SVN: $Id 
 */

class Model_TCategories extends TCategories
{
    /**
     * @No parameters.
     * Return all categories.
     * 
     * @return array 
     */
    public function getAllCategories()
    {
        $DBR = Config::get('DBR');
        $qb = $DBR->createQueryBuilder();
        $qb->add('select','cat')
             ->add('from','TCategories cat');

        $query = $qb->getQuery();
        $result = $query->getResult();
        return $result;
    }
    
    /**
     * id-tai category-giin ugugdliig butsaana.
     * @param integer $id
     * id ni category-giin id.
     * @return array 
     */
    public function getCategory($id)
    {
        $DBR = Config::get('DBR');
        $qb = $DBR->createQueryBuilder();
        $qb->add('select','cat')
             ->add('from','TCategories cat')
             ->add('where','cat.id=:mID')
             ->setParameter('mID',$id);
        $query = $qb->getQuery();
        $result = $query->getResult();
        return $result;
    }
    
    /**
     * Category-g zasvarlana. 
     * 
     * @param integer $id
     * zasvarlah category-giin id
     * @param integer $parentId
     * @param string $name
     * @return not.
     * not return any value;
     */
    public function update($id, $parentId, $name) //!nershliig butneer oruulah. Ex: updateCategory geh met.....
    {
        $DBW = Config::get('DBW');
        $q = $DBW::create()
                ->update('t_category') //!TCategory gej ashiglana
                ->set('name ?', $name)
                ->set('parentId ?', $parentId)
                ->where('id = ?', $id)
                ->execute();
    }
    
    /**
     * parentId-gaas ehleed right left talbariig update hiine.
     * 
     * @param integer $right
     * parent-n right.
     */
    public function updateTree($id, $lft, $rgt)
    {
        $DBW = Config::get('DBW');     
        $q = $DBW->find('TCategories', $id);
        $q->setRgt($lft);
        $q->setLft($rgt);
        $DBW->persist($q);
        $DBW->flush();
        
//        $qr = $DBW::create()
//                ->update('t_categories')
//                ->set('rgt ?', 'rgt + 1')
//                ->where('rgt = ?', $right)
//                ->execute();
    }
}