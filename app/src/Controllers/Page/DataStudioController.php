<?php

//espacio de controladores
namespace App\Controllers\Page;
//interfaz para contenedor de dependencias
use Psr\Container\ContainerInterface as Container;
use Core\Controllers\Templates\Controller as Controller;
//
class DataStudioController extends Controller{

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
    //instancias de modulos de datos con diferentes conexiones de datos
    protected function setModuleInstances(){
        
        //
        $this->modules['data-studio']=$this->container['data-studio']($this->databases['pit']);

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

            //inyectamos usuario en modulo de datastudio
            $this->modules['data-studio']->setUser($this->auth['user-session']);
            //proyectos de data studio
            $viewData['projects']=$this->modules['data-studio']->index();
            //usuario actual en vistas
            $viewData['user']=$this->modules['data-studio']->getUser()->getUserSession();
            //encabezado de la pagina
            $viewData['page']='Data Studio Proyectos';
            $this->views['dynamic']->render($response,'layout/datastudio/index.php',$viewData);

        }

    }
    //proyecto
    public function get($request,$response,$args){

        //mandamos llamar sesion
        session_start();

        //de no existir sesion de usuario
        if(!isset($_SESSION['user'])){

            //redirigimos a inicio de sesion
            return $response->withRedirect($this->globals['url'].'/user/signin');

        }
        //en caso de existir sesion de usuario
        else{
            
            //inyectamos usuario en modulo de datastudio
            $this->modules['data-studio']->setUser($this->auth['user-session']);
            //mostramos el usuario en sesion
            $viewData['user']=$this->modules['data-studio']->getUser()->getUserSession();
            //data studio
            $viewData['project']=$this->modules['data-studio']->get($args['id']);
            //nombre de pagina
            $viewData['page']='Data Studio Proyectos';
            //renderizamos pagina de data studio
            $this->views['dynamic']->render($response,'layout/datastudio/project.php',$viewData);

        }

    }

}

?>