<?php

$comments = $DBR->createQueryBuilder()
            ->select('c')
            ->from('TComments','c')
            ->where('c.code=?1')
            ->setParameters(array(1=>'test_12'))
            ->getQuery()
            ->getResult();

render_template('list.mbm',array('comments'=>$comments,'COMMNET_CODE'=>'test_12'));