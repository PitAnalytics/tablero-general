<?php
//
namespace App\Modules\Scoped;
//interfaces de objeto
use Core\Modules\Templates\UserScope as UserScope;
use Core\User\Interfaces\UserSessionInterface as UserSessionInterface;
//gestor de usuarios
class UserManager extends UserScope{

  public function setUser(UserSessionInterface $user){

    //usario interno como usuario inyectado
    $this->user=$user;

    //establecemos internamente el usuario en sesion
    $this->user->setUserSession($_SESSION['user']);

  }

  //regresamos usuario
  public function getUser(){

    //regresamos objeto de usuario
    return $this->user;

  }
  
  //
  public function index(){

    //en caso de tener nivel de siuperadmin
    if($this->user->getUserSession()['idLevel']=='1'){

      //retornamos todos los usuarios menos los superadmin
      $result = $this->database->query(
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
        WHERE pit_user.idLevel>1"
      )->fetchAll(2);

      //
      for ($i=0; $i <count($result) ; $i++) { 

        $result[$i]['id']=intval($result[$i]['id']);
        $result[$i]['idLevel']=intval($result[$i]['idLevel']);
        $result[$i]['idEnterprise']=intval($result[$i]['idEnterprise']);    

      }

      //
      return $result;
      
    }
    //en caso de tener nivel de admin
    else if($this->user->getUserSession()['idLevel']=='1'){
      
      //retornamos todos los usuarios de la empresa y administrables
      return $this->database->query(
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
        WHERE pit_user.idLevel > ".$this->user->getUserSession()['idLevel']." 
        AND pit_user.idEnterprise = ".$this->user->getUserSession()['idEnterprise']." ;" 
      )->fetchAll(2);

    }
    //en caso de tener un nivel sin capacidades administrativas
    else{

      return [];

    }

  }

  //registro de usuario
  public function signup(array $userSession){

    $userSession['password']=password_hash($userSession['password'],PASSWORD_DEFAULT);

    if($this->database->exists('pit_user',['user'=>$userSession['user']])){
      return false;
    }
    else{
      $this->database->insert('pit_user', $userSession);
      return true;
    }

  }

  //funcion para iniciar sesion
  public function signin(array $userSessionLine){

    return $this->database->validatePassword(
      'pit_user',
      'user','password',
      $userSessionLine
    );

  }

  //funcion para borrar usuario
  public function delete($id){

    //
    $this->database->delete('pit_user',['id'=>$id]);

  }

  //funcion para actualizar privilegios
  public function updatePrivileges(array $userSessionLine){

    //actualizamos privilegios de usuario
    $this->database->update(
      'pit_user',
      ['idLevel'=>$userSessionLine['idLevel']],
      ['user'=>$userSessionLine['user']]
    );

  }

  //funcion que regresa todo el registro del usuario
  public function get($id){

    //
    $result = $this->database->query(    
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
      WHERE pit_user.idLevel>1 
      AND pit_user.id = $id"
    )->fetch(2);

    //regresamos linea de usuario
    return $result;

  }

  //funcion que describe si el usuario existe o no
  public function exists(array $user){

    //en caso de existir el usuario regresamos true, en caso de no existir false
    if($this->database->exists('pit_user',$user)){

      return true;

    }
    else{

      return false;

    }

  }

  //devolvemos lista de empresa
  public function enterpriseIndex(){

    $response = $this->database->query(
    "SELECT id,enterprise FROM 
    `pit_enterprise` 
    ORDER BY id ASC;"
    )->fetchAll(2);

    return $response;

  }

  //devolvemos los niveles
  public function levelIndex(){

    $response = $this->database->query(
      "SELECT id,level FROM 
      `pit_level` 
      ORDER BY id ASC;"
      )->fetchAll(2);

    return $response;

  }

}
?>