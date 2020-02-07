<?php

namespace App\Controllers\Page;
//
use Psr\Container\ContainerInterface as Container;
use Core\Controllers\Templates\Controller as Controller;
//
class HomeController extends Controller{
    
    //mandamos llamar dependencias del container
    public function __construct(Container $container){

        //container yn sus dependencias
        $this->container=$container;

        //metodos plantilla de instanciacion
        $this->setMainInstances();
        $this->setDatabaseInstances();
        $this->setViewInstances();
        $this->setAuthInstances();

    }
    //instancias de confirguracion y globales
    protected function setMainInstances(){

        //dependencia de configuracion principal
        $this->config=$this->container['config'];
        //variables globales de aplicacion
        $this->globals=$this->config->app();

    }
    //establecemos instancias de vistas
    protected function setViewInstances(){

        //instanciamos vistas dinamicas de twig
        $this->views['dynamic']=$this->container['dynamic-views'];

    }
    //establecemos instancias de base de datos
    protected function setDatabaseInstances(){

        //intanciamos base de datos en base a configuraciones
        $this->databases['pit']=$this->container['database'](['pit'=>$this->config->database('pit')]);

    }
    //instancias de autentificacion
    protected function setAuthInstances(){

        //instanciamos DAO de sesion de usuario
        $this->auth['user-session']=$this->container['user-session']($this->databases['pit']);
        //instanciamos DAO especial de usuario
        $this->auth['user-manager']=$this->container['user-manager']($this->databases['pit']);
        //instanciamos la fabrica de reglas para validacion
        $this->auth['rules']=$this->container['validation-rules'];
        //instanciamos checador de reglas
        $this->auth['check']=$this->container['validation-check'];

    }
    //renderizamos pagina de inicio
    public function index($request,$response,$args){

        session_start();

        if(!isset($_SESSION['user'])){

            //redirigimos al inicio de sesion
            return $response->withRedirect($this->globals['url'].'/user/signin');

        }
        else{

            //creamos usuario en DAO
            $this->auth['user-session']->setUserSession($_SESSION['user']);
            //usuario actual y sus caracteristicas como A-Array
            $user=$this->auth['user-session']->getUserSession();
            //usuario actual
            $viewData['user']=$user;
            //nombre de pagina
            $viewData['page']='Inicio';
            $this->views['dynamic']->render($response,'layout/home/index.php',$viewData);

        }

    }

        //renderizamos pagina de inicio
        public function info($request,$response,$args){

            session_start();
    
            if(!isset($_SESSION['user'])){
    
                //redirigimos al inicio de sesion
                return $response->withRedirect($this->globals['url'].'/user/signin');
    
            }
            else{

                //
                echo('<a href="'.$this->globals['url'].'" >HOME</a>');
                phpinfo();
    
            }
    
        }

}

?>