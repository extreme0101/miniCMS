<?php
/*
 * This file is part of the miniCMS package.
 * (c) 2013 SARUULBAT Amarsaikhan <a.saruubat@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$catList = new Model_TCategories();
$catName = $catList->getAllCategories();
render_template('insert.mbm',array('test'=>1));