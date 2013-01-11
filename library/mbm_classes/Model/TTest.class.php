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
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */

class Model_TTest extends TTest {

    public $DBW;
    
    public function Model_TTest() {
        global $DBW;
        
        $this->DBW = $DBW;
    }
    
    public function getAllRecords(){
        $q = $this->findAll();
        
        return $q;
    }

}