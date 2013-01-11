<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Description here
 *
 * @Entity(repositoryClass="TTest")
 * 
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */

class Model_TTest extends TTest {

    public function Model_TTest() {
        
    }
    /**
     * @return ...
     */
    public function insert_row(){
        
        $DBW = Config::get('DBW');
        $aa = new TTest();
        $aa->setName('a');
        $aa->setContent('bb');
        $DBW->persist($aa);
        $DBW->flush();
    }
}