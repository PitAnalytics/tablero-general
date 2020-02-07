<?php

//primitivos (clases madre)
namespace Core\Modules\Templates;

//conexion general a MongoDB
class MongoConnection{

    //instancia de mongo
    protected $mongo;

    //inyectamos instancia de MOngoDB
    public function __construct($mongo){

        $this->mongo=$mongo;

    }
    
}

?>