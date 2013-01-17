<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_TQuestions extends TDemQuestions {

    public function __construct() {
    }

    public static function getAllQuestion() {
        $q = Config::get('DBCR');
        $a = $q->createQueryBuilder();

        $a->add('select', 'u')
                ->add('from', 'TDemQuestions u');

        $query = $a->getQuery();
        $result = $query->getResult();
        return $result;
    }

    public function getDBCR() {
        return parent::$DBCR;
    }

}