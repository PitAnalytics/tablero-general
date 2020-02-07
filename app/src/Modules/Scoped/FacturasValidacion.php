<?php
//espacio de modulos (gestores de daos y tablas)
namespace App\Modules\Scoped;
//mandamos llamar clase de conexion a base de datos
use Core\Modules\Templates\ClientUserScope as ClientUserScope;
use Core\User\Interfaces\UserSessionInterface as UserSessionInterface;
//clase extiende conexion a base de datos
class FacturasValidacion extends ClientUserScope{

  //implementamos funcion abstracta(insiapensable)
  public function setUser(UserSessionInterface $user){

    //usario interno como usuario inyectado
    $this->user=$user;
    //establecemos internamente el usuario en sesion
    $this->user->setUserSession($_SESSION['user']);

  }
  //implmentamos funcion abstracta(indispensable)
  public function getUser(){

    //regresamos el objeto de usuario
    return $this->user;

  }
  // funcion de validacion
  public function validate(string $rfcEmisor,string $rfcReceptor,string $uuid,string $total){

    //respuesta del servidor
    $response=$this->client->get('http://35.227.73.49/validate/'.$rfcEmisor.'/'.$rfcReceptor.'/'.$uuid.'/'.$total);

    //contenido de la repsuesta decodificado de json a a-array
    $body=json_decode($response->getBody(),true);
    return $body;
    
  }

}

?>