<?php
/**
 * zarim tohioldold ROOT erheer ajilluulahgui bol server iin hamgaalaltiin tohirgoonoos shaltgaalaad bolq bn
 */
ini_set("display_errors", "On");
ini_set("memory_limit", "-1");
//Model uudiig aguulj bui dir ali foldert bgaag zaah
define('MODEL_DIR', LIB_DIR);

//MODEL_DIR dotor yamar foldert module uud bairlahiig todorhoiloh
define('MODEL_DIR2', 'Models');

use \Doctrine\ORM\Tools\Setup;
use \Doctrine\ORM\Tools\EntityGenerator;

use \Doctrine\DBAL\Types\Type;
use \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper;
use \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper;
use \Doctrine\ORM\Tools\Console\ConsoleRunner;
use Symfony\Component\Console\Helper\HelperSet;


// autoloaders
require_once LIB_DIR . 'mbm_classes/Doctrine/Common/ClassLoader.php';

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine', LIB_DIR);
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader(MODEL_DIR2, MODEL_DIR);
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Proxies', MODEL_DIR . MODEL_DIR2);
$classLoader->register();

// config
$config = new \Doctrine\ORM\Configuration();
//$config->setEntityNamespaces(array(MODEL_DIR . MODEL_DIR2));
$config->setMetadataDriverImpl($config->newDefaultAnnotationDriver(MODEL_DIR . MODEL_DIR2));
//$config->setMetadataDriverImpl($config->newDefaultAnnotationDriver(LIB_DIR . DS . 'Models' . DS));
$config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);
$config->setProxyDir(MODEL_DIR . MODEL_DIR2 . DS . 'Proxies');
$config->setProxyNamespace('Proxies');


$connectionParams = array(
    'driver' => DBW_DRIVER,
    'host' => DBW_HOST,
    'port' => '3306',
    'user' => DBW_USER,
    'password' => DBW_PASS,
    'dbname' => DBW_NAME,
    'charset' => 'utf8',
);

$em = \Doctrine\ORM\EntityManager::create($connectionParams, $config);

// custom datatypes (not mapped for reverse engineering)
$em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('set', 'string');
$em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');

// fetch metadata
$driver = new \Doctrine\ORM\Mapping\Driver\DatabaseDriver(
        $em->getConnection()->getSchemaManager()
);
$em->getConfiguration()->setMetadataDriverImpl($driver);
$cmf = new \Doctrine\ORM\Tools\DisconnectedClassMetadataFactory($em);
$cmf->setEntityManager($em);
$classes = $driver->getAllClassNames();

print_r($classes);

$metadata = $cmf->getAllMetadata();
//print_r($metadata);

$generator = new EntityGenerator();
echo "\n\n....loading generator...\n\n";
$generator->setUpdateEntityIfExists(true);
echo "\n\n....Updating if exists...\n\n";
$generator->setGenerateStubMethods(true);
$generator->setClassToExtend('Model');
//$generator->setAnnotationPrefix('t__');
//duudahdaa 

//$generator->setExtension('.class.php');
echo "\n\n....3...\n\n";
$generator->setGenerateAnnotations(true);
echo "\n\n....4...\n\n";
echo LIB_DIR . 'Models';
$generator->generate($metadata, MODEL_DIR . MODEL_DIR2);
echo "\n\n....5...\n\n";
print 'Well done!!'."\n\n";
?>