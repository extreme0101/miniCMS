<?php

namespace Test;
use Test;

class My extends Test{
    
    public $r;
    public function My(){
        
        $this->r = 5;
    }
    
    public function getResult(){
        
        return $this->r;
    }
}


