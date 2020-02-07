<?php
//
$container['validation-check']=function($container){

  return  Core\Tools\Validation\Check::instanciate();

};
//
$container['validation-rules']=function($container){

  return Core\Tools\Validation\Rules::instanciate();

};
