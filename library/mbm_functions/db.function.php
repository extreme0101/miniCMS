<?php
/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


function _db($conn=''){
    global $Core;
    
    switch ($conn){
        case 'DBW':
            $r = $Core->BDW;
            break;
        case 'DBR':
            $r = $Core->BDR;
            break;
        case 'DBCW':
            $r = $Core->BDCW;
            break;
        case 'DBCR':
            $r = $Core->BDCR;
            break;
        default:
            $r = $Core->BDW;
            break;
    }
    
    return $r;
}