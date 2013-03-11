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
 * @subpackage File
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class File_LoadFiles {

    public function File_LoadFiles() {
        
    }

    public static function loadFiles($filetype = 'txt') {

        $buf = '';

        switch ($filetype) {
            case 'css':

                $domain = PROTOCOL . DOMAIN . WWW_DIR . CSS_DIR;

                $files = Config::$css_files;
                foreach ($files as $k => $v) {

                    if (substr_count($v, 'http://') > 0) {
                        $css_file = $v;
                        $is_remote = 1;
                    } else {
                        $css_file = $domain . $v;
                        $is_local = 1;
                    }

                    if (file_exists(ABS_DIR . WEB_DIR . CSS_DIR . $v) && $is_local == 1) {
                        $buf .= '<link href="';
                        $buf .= $css_file;
                        $buf .= '" rel="stylesheet" type="text/css" />';
                        $buf .= "\n";
                        Log::save($v . ' loaded. ');
                    } elseif($is_remote == 1) {
                        $buf .= '<link href="';
                        $buf .= $css_file;
                        $buf .= '" rel="stylesheet" type="text/css" />';
                        $buf .= "\n";
                        Log::save($v . ' loaded. ');
                    }else{
                        Log::save($v . ' not found. ', 1);
                    }
                    unset($css_file,$is_local,$is_remote);
                }
                break;
            case 'js':

                $domain = PROTOCOL . DOMAIN . WWW_DIR . JS_DIR;

                $files = Config::$js_files;
                foreach ($files as $k => $v) {
                    if (file_exists(ABS_DIR . WEB_DIR . JS_DIR . $v)) {
                        $buf .= '<script src="';
                        if (substr_count($v, 'http://') > 0) {
                            $buf .= $v;
                        } else {
                            $buf .= $domain . $v;
                        }
                        $buf .= '" type="text/javascript">';
                        $buf .= '</script>';
                        $buf .= "\n";
                        Log::save($v . ' loaded. ');
                    } else {
                        Log::save($v . ' not found. ', 1);
                    }
                }
                break;
            default:
                break;
        }

        return $buf;
    }

}