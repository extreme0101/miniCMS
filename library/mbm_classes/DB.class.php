<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Description Database 
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class DB {

    /**
     * 0 - Not loaded
     * 1 - Loaded
     */
    private static $status;
    
    /**
     * DB::getInstance()
     */
    private static $instance;
    
    /**
     */
    private static $DBCW; //DB Core Write connection
    private static $DBCR; //DB Core Read connection
    private static $DBW; //DB Write connection
    private static $DBR; //DB Read connection

    private function __construct() {
        // initalize state value
        $this->initDatabase();
    }

    //Instance uusgeh
    public static function getInstance() {

        if (!isset(self::$instance)) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    /**
     * @description: Class iin achaalagdsan eseh, yamar gorimd bgaa eseh status
     * 
     * @return String
     */
    public function getStatus() {

        return self::$status;
    }

    /**
     * @description: Class iin achaalagdsan eseh, 
     * yamar gorimd bgaa eseh status iig todorhoiloh
     * 
     * @return None
     */
    public function setStatus($st = '') {

        self::$status = $st;
    }

    /**
     * 
     * @param 
     * 
     * @return null
     */
    private function initDatabase() {

        //model uud haana bairlaj bui zam.
        $model_dir = LIB_DIR . 'Models';
//        require LIB_DIR . DS . 'mbm_classes' . DS . '/Doctrine/Common/ClassLoader.php';
        $classLoader = new \Doctrine\Common\ClassLoader('Doctrine', LIB_DIR . 'mbm_classes');
        $classLoader->register(); // register on SPL autoload stack
        //Model iin fileuudad daraah namespace iig shuud auto nemj ugnu. mbm_classes/Model
        $classLoader = new \Doctrine\Common\ClassLoader('Models', LIB_DIR);
        $classLoader->register();

        $classLoader = new \Doctrine\Common\ClassLoader('Proxies', $model_dir . DS . '/Proxies');
        $classLoader->register();

        $classLoader = new \Doctrine\Common\ClassLoader('Symfony', LIB_DIR . 'mbm_classes' . DS . 'Doctrine' . DS);
        $classLoader->register();

        $config = new \Doctrine\ORM\Configuration();

        $config->setEntityNamespaces(array('Model'));
        //annotion bolq bna geheer l false nemj uguud zugeer bolgov
        $config->setMetadataDriverImpl($config->newDefaultAnnotationDriver($model_dir, false));
        $config->setProxyDir($model_dir . DS . 'Proxy');
        $config->setProxyNamespace('Proxies');
        $config->setAutoGenerateProxyClasses(true);

        Config::set('DB_CONFIG', $config);

        if (APPMODE == "dev") {
//            $cache = new \Doctrine\Common\Cache\ApcCache();
            $cache = new \Doctrine\Common\Cache\ArrayCache();
        } else {
//            $cache = new \Doctrine\Common\Cache\ApcCache();
            $cache = new \Doctrine\Common\Cache\ArrayCache();
        }
        //tur disable hiiv
//        $config->setMetadataCacheImpl($cache);
//        $config->setQueryCacheImpl($cache);
        //mapping (example uses annotations, could be any of XML/YAML or plain PHP)
        Doctrine\Common\Annotations\AnnotationRegistry::registerFile(LIB_DIR . 'mbm_classes/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php');
//        $driver = new Doctrine\ORM\Mapping\Driver\AnnotationDriver(
//                new Doctrine\Common\Annotations\AnnotationReader(), array($model_dir)
//        );

        $connectionOptions = array(
            'dbname' => DBW_NAME,
            'user' => DBW_USER,
            'password' => DBW_PASS,
            'host' => DBW_HOST,
            'driver' => DBW_DRIVER,
        );

        Config::set('DB_OPTIONS', $connectionOptions);

        $em = Doctrine\ORM\EntityManager::create($connectionOptions, $config);


        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('set', 'string');
        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');

        $helperSet = new Symfony\Component\Console\Helper\HelperSet(array(
            'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
            'dialog' => new \Symfony\Component\Console\Helper\DialogHelper(),
            'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
                ));


// fetch metadata
        $driver = new \Doctrine\ORM\Mapping\Driver\DatabaseDriver(
                $em->getConnection()->getSchemaManager()
        );
        $em->getConfiguration()->setMetadataDriverImpl($driver);

        $this->DBW = $em;
        $this->DBR = $em;
        $this->DBCW = $em;
        $this->DBCR = $em;

        //busad include hiigdej bui file uud ruu damjuulahad ashiglav.
        Config::set('DBW', $this->DBW);
        Config::set('DBR', $this->DBR);
        Config::set('DBCW', $this->DBCW);
        Config::set('DBCR', $this->DBCR);
        
        
        self::$status = '1';
    }

}

