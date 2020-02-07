<?php

namespace Core\Modules\Templates;

class BigQueryConnection{

    protected $bigquery;

    public function __construct($bigquery){

        $this->bigquery=$bigquery;

    }
    
}

?>