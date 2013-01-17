<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * 
 * @Entity(repositoryClass="TUsers")
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
//use Doctrine\ORM\EntityManager;

class Model_TUsers extends TUsers {

    public function __construct() {
        
    }

    static function getUserByUsername($username = '') {

        $db = Config::get('DBCR');
        
        $qb = $db->createQueryBuilder();

        $qb->add('select', 'u')
                ->add('from', 'TUsers u')
                ->add('where', 'u.username =?1');

        $qb->setParameters(array(1 => $username));

        $q = $qb->getQuery();

        $user = $q->getArrayResult();

        return $user;
    }
    
    static function getUserById($user_id = 0) {

        $query = Config::get('DBR')->createQuery("SELECT u FROM TUsers u");
        $users = $query->getResult();

        print_r($query->getResult());
        die();
        $em = Config::get('DBCR')->getRepository('TUsers');
        $query = $em->createQueryBuilder('SELECT p FROM TUsers p')
                ->setParameter('id', 2);

        $user = $query->getResult();
        return $user;
    }
    
    public function getDBCR(){
        
        return parent::DBCR;
    }

}