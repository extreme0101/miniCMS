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
 * @subpackage -
 * @author     Dandarbaatar Gan-erdene <ganaa0830@gmail.com>
 * @version    SVN: $Id 
 */


$question_vars = Config::get('POST');

if(isset($question_vars['title']))
{
    
        $qa = new TDemQuestions();
       
        $qa->setTitle($question_vars['title']);
        $qa->setAddedBy(get_logged_user_id());
        $qa->setContent($question_vars['content']);
        $qa->setPriority(1);
        $qa->setCreatedAt( new DateTime('now'));
        $qa->setThumbUp(0);
        $qa->setThumbDown(0);
        
        $DBW->persist($qa);
        $DBW->flush();
        
        
}
render_template('index.mbm');


