<?php

$libPath = '/home/oluulaa/library' . DS . 'mbm_classes'; // Set this to where you have doctrine2 installed
// autoloaders
require_once $libPath . '/Doctrine/Common/ClassLoader.php';

$classLoader = new \Doctrine\Common\ClassLoader('Model', $libPath);
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Proxies', $libPath);
$classLoader->register();
$classLoader = new \Doctrine\Common\ClassLoader('Symfony', $libPath);
$classLoader->register();

$config = new \Doctrine\ORM\Configuration();


$config->setMetadataDriverImpl($config->newDefaultAnnotationDriver($libPath.DS.'Model'));
//$config->setMetadataDriverImpl($config->newDefaultAnnotationDriver(LIB_DIR . DS . 'Model' . DS));
$config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);
$config->setProxyDir(__DIR__ . '/Proxies');
$config->setProxyNamespace('Proxies');

$connectionOptions = array(
    'driver' => DBW_DRIVER,
    'host' => DBW_HOST,
    'port' => '3306',
    'user' => DBW_USER,
    'password' => DBW_PASS,
    'dbname' => DBW_NAME,
    'charset' => 'utf8',
);

$em = \Doctrine\ORM\EntityManager::create($connectionOptions, $config);

$helperSet = new \Doctrine\Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));








