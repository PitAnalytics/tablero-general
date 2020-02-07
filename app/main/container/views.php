<?php
//
$container['dynamic-views']=function($container){

  //instancia de vistas
  $view = new \Slim\Views\Twig('../app/views',['cache'=>'../app/views/cache']);
  $router = $container->get('router');
  $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
  $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));
  return $view;

};
//