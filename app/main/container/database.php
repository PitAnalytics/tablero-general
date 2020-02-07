<?php
/*
 * 
 * Modulo de Conexion a Base de Datos extendido del ORM Medoo
 * 
 * Las conexiones son multitons es decir un arreglo asociativo de singletons cada uno con conexion a base datos diferente
 * 
 * Se pueden llamar bases de datos con distintos nombres y por cada nombre solo existira una instancia de conexion
 *  
 */
//
$container['database']=function($container){

  return function($config){

      return Core\Tools\Database\DatabasePool::instanciate($config);

  };

};
//
$container['client']=function($container){

  return function($config){

      return Core\Tools\Http\ClientPool::instanciate($config);

  };

};
//
$container['mongo-db']=function($container){

  return function($config){

    $collection = (new MongoDB\Client);

  };

};
//




