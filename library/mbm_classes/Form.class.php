<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Generate Form class
 *
 * @package    miniCMS
 * @subpackage Form
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */


class Form {

    private static $instance = NULL;

    // get Singleton instance of Form class

    public static function getInstance() {

        if (self::$instance === NULL) {

            self::$instance = new self;
        }

        return self::$instance;
    }

    // <form> tag ehluuleh

    public static function open(array $attributes) {

        $html = '<form';

        if (!empty($attributes)) {

            foreach ($attributes as $attribute => $value) {

                if (in_array($attribute, array('action', 'method', 'id', 'class', 'enctype')) and !empty($value)) {

                    // assign default value to 'method' attribute

                    if ($attribute === 'method' and ($value !== 'post' or $value !== 'get')) {

                        $value = 'post';
                    }

                    $html .= ' ' . $attribute . '="' . $value . '"';
                }
            }
        }

        return $html . '>';
    }

    // <input> tag uusgeh

    public static function input(array $attributes) {

        $html = '<input';

        if (!empty($attributes)) {

            foreach ($attributes as $attribute => $value) {

                if (in_array($attribute, array('type', 'id', 'class', 'name', 'value')) and !empty($value)) {

                    $html .= ' ' . $attribute . '="' . $value . '"';
                }
            }
        }

        return $html . '>';
    }

    //<textarea> tag uusgeh

    public static function textarea(array $attributes) {

        $html = '<textarea';

        $content = '';

        if (!empty($attributes)) {

            foreach ($attributes as $attribute => $value) {

                if (in_array($attribute, array('rows', 'cols', 'id', 'class', 'name', 'value')) and !empty($value)) {

                    if ($attribute === 'value') {

                        $content = $value;

                        continue;
                    }

                    $html .= ' ' . $attribute . '="' . $value . '"';
                }
            }
        }

        return $html . '>' . $content . '</textarea>';
    }

    // form iig </form> tag aar haah

    public static function close() {

        return '</form>';
    }

}

