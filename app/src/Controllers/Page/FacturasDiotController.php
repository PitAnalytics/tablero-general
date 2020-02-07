<?php

//espacio de controladores
namespace App\Controllers\Page;
//interfaz para contenedor de dependencias
use Psr\Container\ContainerInterface as Container;
use Core\Controllers\Templates\Controller as Controller;
//
class FacturasDiotController extends Controller{

    /**********************************************/
    /*****Funciones de Intanciacion y constructor**/
    /**********************************************/
    public function __construct(Container $container){

        //container y sus dependencias
        $this->container=$container;

        //metodos plantilla de instanciacion
        $this->setMainInstances();
        $this->setDatabaseInstances();
        $this->setViewInstances();
        $this->setAuthInstances();
        $this->setModuleInstances();

    }
    //instancias principales y de configuracion
    protected function setMainInstances(){

        //dependencia de configuracion principal
        $this->config=$this->container['config'];
        //variables globales de aplicacion
        $this->globals=$this->config->app();

    }
    //instanciamos motores de plantilla para vista
    protected function setViewInstances(){

        //instanciamos vistas dinamicas de twig
        $this->views['dynamic']=$this->container['dynamic-views'];

    }
    //instanciamos bases de datos
    protected function setDatabaseInstances(){

        //intanciamos base de datos en base a configuraciones
        $this->databases['pit']=$this->container['database'](['pit'=>$this->config->database('pit')]);

    }
    //instanciamos sistemas de autentificacion y validacion
    protected function setAuthInstances(){

        //instanciamos DAO especial de usuario
        $this->auth['user-session']=$this->container['user-session']($this->databases['pit']);
        //instanciamos gestor de usuarios
        $this->auth['rules']=$this->container['validation-rules'];
        //instanciamos checador de reglas
        $this->auth['check']=$this->container['validation-check'];

    }
    //
    protected function setModuleInstances(){

 

    }
    //
    protected function setGoogleInstances(){

    }
    /*******************************/
    /*****Funciones de Controlador**/
    /*******************************/
    public function index($request,$response){

        //empezamos sesion de usuario
        session_start();

        //en caso de no existir sesion de usuario
        if(!isset($_SESSION['user'])){

            //redirigimos a inicio de sesion 
            return $response->withRedirect($this->globals['url'].'/user/signin');

        }
        //en caso de existir sesion de usuario
        else{

            $viewData=[];

            $this->views['dynamic']->render($response,'layout/facturas/index.php',$viewData);

        }

    }
    //proyecto
    public function get($request,$response,$args){



    }

}

?>