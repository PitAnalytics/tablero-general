<?php
/*
 * Modulos DAO
 * 
 * instancias requieren como dependencia ORM Medoo
 * tambien pueden requerir ODM para MongoDB
 * o pueden requerir 
 * 
 * las instancias pueden ser llamadas como singleton o como clases normales
 * 
 */
$container['data-studio']=function($container){
  return function($database){
    return new App\Modules\Scoped\DataStudio($database);
  };
};
//
$container['facturas-validacion']=function($container){
  return function($client){
    return new App\Modules\Scoped\FacturasValidacion($client);
  };
};
//
$container['bigquery']=function($container){
  return function($config){
    return App\Tools\BigQueryClient::instanciate($config);
  };
};
//
?>
