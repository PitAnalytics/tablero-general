<?php

namespace Core\Modules\Templates;

class DatabaseConnection{

    protected $database;

    public function __construct($database){

        $this->database=$database;

    }
    
}

?>