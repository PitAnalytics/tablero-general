<?php
//
$container['user-manager']=function($container){

  return function($database){

    return new App\Modules\Scoped\UserManager($database);

  };

};
//
$container['user-session']=function($container){

  return function($database){

    return App\User\User::instanciate($database);

  };

};