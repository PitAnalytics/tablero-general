<?php

namespace Core\Modules\Templates;

use Core\Modules\Templates\DatabaseConnection as Connection;
use Core\Modules\Interfaces\UserScopeInterface as UserScopeInterface;
use Core\User\Interfaces\UserSessionInterface as UserSessionInterface;

//clase abstracta para inyeccion de usuarios
abstract class UserScope extends Connection implements UserScopeInterface{

  //objeto de usuario
  protected $user;

  //inyeccion de usuario
  public abstract function setUser(UserSessionInterface $user);

  //regresamos objeto de usuario en caso de necesitarlo
  public abstract function getUser();
    
}

?>