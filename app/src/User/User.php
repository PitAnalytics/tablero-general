<?php

//espacio de nombres mediado por composer y psr-4
namespace App\User;

//clase primitiva de coneccion a base de datos
use Core\User\Templates\UserSession as UserSession;
//usuario implementado
class User extends UserSession{

  //instancia estatica de bigquery para singleton
  private static $instance=null;

  //constructor estatico de singleton
  public static function instanciate($config){

    //de no existir instancia la creamos
    if (!self::$instance instanceof self){

      self::$instance = new self($config);
 
    }

    //de existir la regresamos
    return self::$instance;

  }

  public function setUserSession(string $session){

    $this->userSession = $this->database->query(    
      "SELECT 
      pit_user.id AS id, 
      pit_user.user AS user, 
      pit_user.dateTime AS dateTime, 
      pit_user.idLevel AS idLevel, 
      pit_level.level AS level, 
      pit_user.idEnterprise AS idEnterprise,
      pit_enterprise.enterprise AS enterprise
      FROM pit_user AS pit_user 
      INNER JOIN  pit_level AS pit_level 
      ON pit_level.id = pit_user.idLevel 
      INNER JOIN pit_enterprise AS pit_enterprise
      ON pit_enterprise.id = pit_user.idEnterprise 
      WHERE pit_user.user = '$session';"
    )->fetch(2);

  }
  //
  public function getUserSession(){

    return $this->userSession;

  }

}
//
?>