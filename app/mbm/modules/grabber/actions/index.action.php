<?php

/**
 * Ashilah bolomjtoi huvisagchuud
 * Config $config 
 * $template (Twig)
 */
/*
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

load_css('contact-importer/style.css');
include_once LIB_DIR.'contactImporter/example/contacts.main.php';
$handler = new ContactsHandler();
$handler->handle_request($_POST);



render_template('index.mbm', array('aa' => 1));
