<?php

/*
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * System iin undsen core load hiih, tohirgoo hiih. DB connection
 *
 * @package    miniCMS
 * @subpackage Core
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
use Doctrine\Common\Annotations\AnnotationRegistry;

class Core {

    public $include_dir;
    public $GET = array();
    public $POST = array();
    public $main_config = array();
    public $config; //config variables
    public $Template; //Template
    public $DBCW; //DB Core Write connection
    public $DBCR; //DB Core Read connection
    public $DBW; //DB Write connection
    public $DBR; //DB Read connection
    public $Lang; //Lang
    public $session; //Session
    public $model_dir; //Model files
    public $user; //user

    /**
     * undsen tohirgoo hiih
     * @param $config
     * @return null
     */

    public function __construct($config) {

        require_once 'Loader.class.php';

        Loader::registerAutoload();

        /**
         * set deault time zone
         */
        date_default_timezone_set(TIME_ZONE);

        /**
         * $this->GET tohiruulahiin umnu duudah shaardlagatai
         */
        $this->initConfig($config);

        /**
         * App, module, action uudiig todorhoilno
         * Config::set ashiglaj app,module,action iig onoono
         * 
         * @return Array array('app'=>,'module'=>,'action'=>)
         */
        Log::save("opened page : " . $_SERVER['REQUEST_URI']);
        $this->GET = Request_Get::setGetQuery($_SERVER['REQUEST_URI']);
        $this->POST = Request_Post::get();
        Config::set('POST', Request_Post::get());
        Config::set('GET', $this->GET);

        $GLOBALS['GET'] = $this->GET;

        include_files(LIB_DIR . 'mbm_functions' . DS);

//connect to DB
        $this->initDatabase();

//        $this->user = new User($this->GET);

        /**
         * SESSION ID shineer onooh
         * QUERYSTRING format : mBmCHECK/XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
         */
        if (strlen(QUERYSTRING) == 41 && substr(QUERYSTRING, 0, 8) == 'mBmCHECK') {
            $sess_id = substr(QUERYSTRING, 9, 32);
        } else {
            $sess_id = null;
        }
//        $session = new Storage_Session(
////                array('session_id' => $sess_id)
//        );
//        $session->initialize(array());

        $this->session = new User();

        //session ehelsen tul log ehleh
        Log::save("\n\n\n*********************************************************\n"
                . "*\t" . date('Y-m-d H:i:s') . ' ' . getenv('REMOTE_ADDR') . "\t\t*\n"
                . "*\t" . session_id() . "\t\t*\n"
                . "*********************************************************\n", 2);

        /**
         * Load Language. 
         * Session-d default lang tohiruulsan tul odoo lang file iig achaalna
         */
        $this->Lang = new Language($this->session->getAttribute('ln'));


        Config::set('session', $this->session);



        /**
         * App, module uudiig tohiruulah
         *
         */
        //GET[''] utguud orj irsen. initConfig oor this->config ok bolson tul ....
        $this->config->loadApp($this->GET['app']);
        $this->config->loadModule($this->GET['module']);

        $this->config->loadAction($this->GET['action']);

        //Load Twig
        $this->initTemplate();
    }

    /**
     * Undsen tohirgoog define hiine
     * @param array $config
     * 
     * @return null
     */
    public function initConfig($config = array()) {
        foreach ($config as $k => $v) {
            define(strtoupper($k), $v);
//            echo strtoupper($k).'-'.$v.'<br />';
        }
        //die();
        $this->main_config = $config;
        $this->config = new Config();
    }

    /**
     * @param 
     * 
     * @return null
     */
    public function initTemplate() {

        $this->Template = new Template();
    }

    /**
     * @param 
     * 
     * @return null
     */
    public function initmBm() {
        $mBm = new mBm();
        $mBm->Template = $this->Template;
        $mBm->DBCR = $this->DBCR;
        $mBm->DBCW = $this->DBCW;
        $mBm->DBR = $this->DBR;
        $mBm->DBW = $this->DBW;
    }

    /**
     * @param 
     * 
     * @return null
     */
    public function initDatabase() {

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
    }

}