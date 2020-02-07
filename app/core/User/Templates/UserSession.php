<?php

//espacio de nombres mediado por composer y psr-4
namespace Core\User\Templates;
//clase primitiva de coneccion a base de datos
use Core\Modules\Templates\DatabaseConnection as Connection;
//interfaz para sesion de usuario
use Core\User\Interfaces\UserSessionInterface as UserSessionInterface;
//
abstract class UserSession extends Connection implements UserSessionInterface{

  protected $userSession;
  public abstract function setUserSession(string $session);
  public abstract function getUserSession();

}
//
?>