<?php

class Loader {

    public static function registerAutoload() {
        spl_autoload_extensions('.class.php');
        return spl_autoload_register(array(__CLASS__, 'includeClass'));
    }

    public static function unregisterAutoload() {
        return spl_autoload_unregister(array(__CLASS__, 'includeClass'));
    }

    /**
     * .class.php esvel .php file iig include hiine
     */
    public static function includeClass($class) {
        //set_include_path(LIB_DIR);
        //include $class.'.class.php';
        $dir = LIB_DIR . 'mbm_classes';
        $filename = DIRECTORY_SEPARATOR . str_replace(array('_', "\\"), array('/', '/'), $class);
        $file = $dir . DIRECTORY_SEPARATOR . str_replace(array('_', "\\"), array('/', '/'), $class);



        //Model bol duudna
        if (file_exists(LIB_DIR . 'Models' . DS . $filename . '.php')) {
            $file = LIB_DIR . 'Models' . DS . $filename . '.php';
        } else {

            //Obj duudna
            if (file_exists($file . '.class.php')) {
                $file = $file . '.class.php';
            }
            if (file_exists($file . '.php')) {
                $file = $file . '.php';
            }
        }
//        echo $file . '<br />';
        if (file_exists($file)) {
            require_once( $file);
        }else{
            Log::save($file .' not found',1);
        }
    }

}
