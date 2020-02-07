<?php
//espacio de modulos (gestores de daos y tablas)
namespace App\Modules\Concretos;
use Core\Modules\Interfaces\DrilldownInterface as DrilldownInterface;
use Core\Modules\Templates\BigqueryConnection as Connection;
//
class BaseInstalada extends Connection implements DrilldownInterface{

  //lista de proyectos 
  public function index(){

    

  }
  //registro de projecto
  public function get($id){



  }

  public function getChild(array $params){



  }

}

?>