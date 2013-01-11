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
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */

use Doctrine\ORM\EntityRepository,
    Doctrine\ORM\QueryBuilder,
    Doctrine\ORM\Configuration,
    Doctrine\ORM\EntityManager,
    Doctrine\ORM\Query,
    Doctrine\ORM\Query\AST,
    Doctrine\DBAL\Types\Type,
    Doctrine\ORM\Mapping\ClassMetadata,
    Doctrine\ORM\NonUniqueResultException,
    Doctrine\Common\Annotations\AnnotationRegistry;


class Model extends Doctrine\ORM\EntityManager{

    public static $DBW;
    public static $DBR;
    public static $DBCW;
    public static $DBCR;
    
    public function Model() {
        global $DBW, $DBR, $DBCR, $DBCW;
        
        $this->DBW = Config::get('DBW');
        $this->DBR = Config::get('DBR');
        $this->DBCW = Config::get('DBCW');
        $this->DBCR = Config::get('DBCR');
        
    }

}