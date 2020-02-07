<?php

$container['bigquery']=function($container){

  return function($config){

    return Core\Tools\BigQueryClient::instanciate($config);

  };

};
//
$container['storage']=function($container){

  return function($config){

    return new Google\Cloud\Storage\StorageClient($config);

  };

};