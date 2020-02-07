<?php
//espacio de modulos (gestores de daos y tablas)
namespace App\Modules\Scoped;
//mandamos llamar clase de conexion a base de datos
use Core\Modules\Templates\UserScope as UserScope;
use Core\User\Interfaces\UserSessionInterface as UserSessionInterface;
//clase extiende conexion a base de datos
class DataStudio extends UserScope{

  public function setUser(UserSessionInterface $user){

    //usario interno como usuario inyectado
    $this->user=$user;
    //establecemos internamente el usuario en sesion
    $this->user->setUserSession($_SESSION['user']);

  }

  //funcion para obtener dao de usuario
  public function getUser(){
    //regresamos el objeto de usuario
    return $this->user;
  }

  //lista de proyectos 
  public function index(){

    //regresamos todos los proyectos
    return $this->database->query(
      "SELECT 
      project.id, 
      project.project, 
      enterprise.enterprise 
      FROM data_studio_project AS project 
      INNER JOIN pit_enterprise AS enterprise 
      ON enterprise.id = project.idEnterprise 
      WHERE 1 = 1;"
    )->fetchAll(2);

  }
  //registro de projecto
  public function get($id){

    //regresamos una linea de proyectos en base a id con la condicion de estar presente en la misma empresa
    return $this->database->get('data_studio_project',['id','project','width','height','url'],['id'=>$id]);

  }

}

?>