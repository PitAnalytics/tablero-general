<?php

//espacio de controladores
namespace App\Controllers\Page;
//interfaz para contenedor de dependencias
use Psr\Container\ContainerInterface as Container;
use Core\Controllers\Templates\Controller as Controller;
//
class FacturasValidacionController extends Controller{

    /**********************************************/
    /*****Funciones de Intanciacion y constructor**/
    /**********************************************/
    public function __construct(Container $container){

        //container y sus dependencias
        $this->container=$container;

        //metodos plantilla de instanciacion
        $this->setMainInstances();
        $this->setDatabaseInstances();
        $this->setClientInstances();
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
    //instanciamos bases de datos
    protected function setClientInstances(){

        $this->clients['sat']=$this->container['client'](['sat'=>['base_uri'=>'http://35.227.73.49']]);

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

        $this->modules['facturas-validacion']=$this->container['facturas-validacion']($this->clients['sat']);
        
    }
    /*******************************/
    /*****Funciones de Controlador**/
    /*******************************/
    public function simpleGet($request,$response){

        //empezamos sesion de usuario
        session_start();

        //en caso de no existir sesion de usuario
        if(!isset($_SESSION['user'])){

            //redirigimos a inicio de sesion 
            return $response->withRedirect($this->globals['url'].'/user/signin');

        }
        //en caso de existir sesion de usuario
        else{

            //datos de vista
            $viewData=[];
            $this->views['dynamic']->render($response,'layout/facturas/validacion.php',$viewData);

        }

    }

    public function simplePost($request,$response){


        //empezamos sesion de usuario
        session_start();

        //en caso de no existir sesion de usuario
        if(!isset($_SESSION['user'])){

            //redirigimos a inicio de sesion 
            return $response->withRedirect($this->globals['url'].'/user/signin');

        }
        //en caso de existir sesion de usuario
        else{

            //datos de vista vacios
            $viewData=[];
            //inyectamos usuario en modulo de datastudio
            $this->modules['facturas-validacion']->setUser($this->auth['user-session']);

            //
            $factura = [
                'rfcEmisor'=>$_POST['rfc_emisor'],
                'rfcReceptor'=>$_POST['rfc_receptor'],
                'uuid'=>$_POST['uuid'],
                'total'=>$_POST['total'],
            ];
            //
            $rules=$this->auth['rules']->getRules([
                'rfcEmisor'=>'rfc',
                'rfcReceptor'=>'rfc',
                'uuid'=>'uuid',
                'total'=>'numeric',
            ]);
            //reglase de validacion checadas
            $validation=$this->auth['check']->validation($rules,$factura);

            if(!$validation['success']){

                //en caso de existir errores los metemos en el apartado de vistas
                $viewData['errors']=$validation['errors'];
                //renderizamos inicio de sesion
                $this->views['dynamic']->render($response,'layout/facturas/validacion.php',$viewData);
    
            }
            else{
            //
            $viewData[
                'factura']=[
                'rfcEmisor'=>$factura['rfcEmisor'],
                'rfcReceptor'=>$factura['rfcReceptor'],
                'uuid'=>$factura['uuid'],
                'total'=>$factura['total'],
                'status'=>$this->modules['facturas-validacion']->validate($factura['rfcEmisor'],$factura['rfcReceptor'],$factura['uuid'],$factura['total']),
            ];
            //
            $viewData['user']=$this->modules['facturas-validacion']->getUser()->getUserSession();
            //datos de vista
            $this->views['dynamic']->render($response,'layout/facturas/validacion.php',$viewData);
            }

        }

    }

}

?>