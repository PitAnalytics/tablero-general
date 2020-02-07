<?php

//espacio de controladores
namespace App\Controllers\Page;
//usamos la interfaz de contenedor
use Psr\Container\ContainerInterface as Container;
use Core\Controllers\Templates\Controller as Controller;
//heredamos de la clase de controlador base
class UserController extends Controller{

    /**********************************************/
    /*****Funciones de Intanciacion y constructor**/
    /**********************************************/
    //mandamos llamar dependencias del container
    public function __construct(Container $container){

        //container y sus dependencias
        $this->container=$container;

        //metodos plantilla de instanciacion
        $this->setMainInstances();
        $this->setDatabaseInstances();
        $this->setViewInstances();
        $this->setAuthInstances();

    }
    //instancias principales
    protected function setMainInstances(){

        //dependencia de configuracion principal
        $this->config=$this->container['config'];
        //variables globales de aplicacion
        $this->globals=$this->config->app();

    }
    //instancias de vistas
    protected function setViewInstances(){

        //instanciamos vistas dinamicas de twig
        $this->views['dynamic']=$this->container['dynamic-views'];

    }
    //instancias de base de datos
    protected function setDatabaseInstances(){

        //intanciamos base de datos sql en base a configuraciones
        $this->databases['pit']=$this->container['database'](['pit'=>$this->config->database('pit')]);

    }
    //instancias de autentificacion
    protected function setAuthInstances(){

        //instanciamos DAO de sesion de usuario
        $this->auth['user-session']=$this->container['user-session']($this->databases['pit']);
        //instanciamos gestor de usuarios
        $this->auth['user-manager']=$this->container['user-manager']($this->databases['pit']);
        //instanciamos la fabrica de reglas para validacion
        $this->auth['rules']=$this->container['validation-rules'];
        //instanciamos checador de reglas
        $this->auth['check']=$this->container['validation-check'];
        //objeto de usuario

    }
    /************************************************/
    /*****Funciones de Controlador de Peticiones*****/
    /************************************************/
    public function index($request,$response){

        //mandamos llamar sesion
        session_start();

        //en caso de no existir sesion de usuario
        if(!isset($_SESSION['user'])){

            //redirigimos a login
            return $response->withRedirect($this->globals['url'].'/user/signin');

        }
        //en caso de existir sesion de usuario
        else{

            //creamos usuario en DAO
            
            //usuario actual y sus caracteristicas como A-Array
            
            //agregamos usuario a instancia de usuarios
            $this->auth['user-manager']->setUser($this->auth['user-session']);
            //encabezado de pagina
            $viewData['page']='Gestor de Usuarios';
            //usuario en sesion
            $viewData['user']=$this->auth['user-manager']->getUser()->getUserSession();
            //lista de usuarios
            $viewData['users']=$this->auth['user-manager']->index();
            //renderizamos vista e inyectamos variables
            $this->views['dynamic']->render($response,'layout/user/index.php',$viewData);

        }

    }
    //funcion de cierre de sesion
    public function signout($request,$response){

        //abrimos sesion de existir
        session_start();
        //destruimos sesion
        session_destroy();
        //redirigimos al login
        return $response->withRedirect($this->globals['url'].'/user/signin');
        
    }
    //renderizado de login
    public function getSignin($request,$response){

        //abrimos sesion de existir
        session_start();

        //de no existir el usuario
        if(!isset($_SESSION['user'])){

            //rencderizamos al login
            $this->views['dynamic']->render($response,'layout/user/signin.php',[]);

        }
        //en caso de existir sesion de usuario
        else{

            //redirigimos al inicio
            return $response->withRedirect($this->globals['url'].'/');

        }

    }
    //procesamiento de peticion de inicio de sesion
    public function postSignin($request,$response){

        //variables de usuario a iniciar sesion
        $user=[
            'user'=>$_POST['user'],
            'password'=>$_POST['password']    
        ];

        //establecemos reglas
        $rules=$this->auth['rules']->getRules([
            'user'=>'alphanumeric',
            'password'=>'alphanumeric'
        ]);

        //datos de vista
        $viewData=[];

        //reglase de validacion checadas
        $validation=$this->auth['check']->validation($rules,$user);

        //en caso de fallar la validacion de reglas
        if(!$validation['success']){

            //en caso de existir errores los metemos en el apartado de vistas
            $viewData['errors']=$validation['errors'];

            //renderizamos inicio de sesion
            $this->views['dynamic']->render($response,'layout/user/signin.php',$viewData);

        }
        else{

            //opciones para respuesta de validacion de password
            switch ($this->auth['user-manager']->signin($user)) {

                //en caso de no existir el usuario 
                case -1: 
                //agregamos error de validacion de usuario 
                $viewData['errors']['user'][]='el usuario no existe';
                //renderizamos nuevamente el login
                $this->views['dynamic']->render($response,'layout/user/signin.php',$viewData);
                    break;

                //en caso de tener un password incorrecto
                case 0:
                //mandamos error a la vista
                $viewData['errors']['password'][]='password incorrecto';
                //renderizamos el login otra ves con los errores
                $this->views['dynamic']->render($response,'layout/user/signin.php',$viewData);
                    break;
                
                //en caso de si existir el usuario y ser correcto el password
                case 1:
                //empezamos sesion
                session_start();
                //creamos sesion de usuario
                $_SESSION['user']=$user['user'];
                //redirigimos al menu principal
                return $response->withRedirect($this->globals['url'].'/');
    
                    break;
    
            }

        }
        
    }
    //renderizado de registro de usuarios
    public function getSignup($request,$response){

        //mandamos llamar sesion
        session_start();

        //de no existir sesion de usuario
        if(!isset($_SESSION['user'])){

            //redirigimos al inicio de sesion
            return $response->withRedirect($this->globals['url'].'/user/signin');

        }
        else{

            //establecemos el usuario
            $this->auth['user-manager']->setUser($this->auth['user-session']);
            //datos de vista
            $viewData=[];
            //titulo de pagina
            $viewData['page']='Gestor de Usuarios';
            //usuario actual
            $viewData['user']=$this->auth['user-manager']->getUser()->getUserSession();
            //lista de usuarios
            $viewData['users']=$this->auth['user-manager']->index();
            //
            $this->views['dynamic']->render($response,'layout/user/signup.php',$viewData);

        }

    }
    //recibimos la peticion de registro
    public function postSignup($request,$response){

        //reanudamos sesion de existir
        session_start();

        //si no existe la sesion 
        if(!isset($_SESSION['user'])){

            //redirigimos al login
            return $response->withRedirect($this->globals['url'].'/user/signin');

        }
        //de existir sesion de usuario
        else{

            //establecemos sesion de usuario
            
            //tomamos el usuario
            
            //agregamos usuario
            $this->auth['user-manager']->setUser($this->auth['user-session']);
            //datos de vista
            $viewData=[];
            //creamos usuario a partir de parametros post
            $newUser=[
                'user'=>$_POST['user'],
                'password'=>$_POST['password'],
                'idLevel'=>$_POST['idLevel'],
                'idEnterprise'=>$_POST['idEnterprise']            
            ];
            //establecemos reglas
            $rules=$this->auth['rules']->getRules([
                'user'=>'alphanumeric',
                'password'=>'alphanumeric',
                'idLevel'=>'digit',
                'idEnterprise'=>'digit'
            ]);
    
            //estructura de datos a partir de validacion
            $validation=$this->auth['check']->validation($rules,$newUser);
    
            //si  hay errores 
            if(!$validation['success']){
    
                //
                $viewData['users']=$this->auth['user-manager']->index();
                $viewData['success']=$validation['success'];
                $viewData['errors']=$validation['errors'];
                $this->views['dynamic']->render($response,'layout/user/signup.php',$viewData);
    
            }

            else{
    
                //
                if(!$this->auth['user-manager']->signup($newUser)){

                    //
                    $viewData['users']=$this->auth['user-manager']->index();
                    $viewData['errors']['user'][]='el usuario ya existe, intente otro nombre';
                    $viewData['user']=$this->auth['user-manager']->getUser()->getUserSession();
                    $this->views['dynamic']->render($response,'layout/user/signup.php',$viewData);

                }
                //
                else{

                    //
                    $viewData['users']=$this->auth['user-manager']->index();
                    $viewData['success']=$validation['success'];
                    $viewData['user']=$this->auth['user-manager']->getUser()->getUserSession();
                    $this->views['dynamic']->render($response,'layout/user/signup.php',$viewData);

                }
    
            }

        }

    }
    //renderizamos peticion de actualizacion de privilegios
    public function getUpdate($request,$response,$args){

        //
        session_start();

        //
        if(!isset($_SESSION['user'])){

            //
            return $response->withRedirect($this->globals['url'].'/user/signin');

        }
        //
        else{

            //usuario actual y sus caracteristicas como A-Array
            
            //tomamos el usuario activo
            
            //inyectamos el usuario activo a gestor de usuarios
            $this->auth['user-manager']->setUser($this->auth['user-session']);
            //id a partir de url
            $id = $args['id'];

            if(!$this->auth['user-manager']->exists(['id'=>$id])){

                //de no existir nuevo usuario redirigimos
                return $response->withRedirect($this->globals['url'].'/user');

            }
            else{

                //obtenemos el usuario a partir del id y lo agregamos directamente a la vista
                $viewData['update']=$this->auth['user-manager']->get($id);
                //nombramos pagina
                $viewData['page']='Gestor de Usuarios';
                //agregamos usuario activo
                $viewData['user']=$this->auth['user-manager']->getUser()->getUserSession();
                //agregamos lista de usuarios
                $viewData['users']=$this->auth['user-manager']->index();
                $this->views['dynamic']->render($response,'layout/user/update.php',$viewData);

            }

        }

    }
    //procesamos peticion de actualizacion
    public function postUpdate($request,$response,$args){

        //mandamos llamar sesion
        session_start();
        //en caso de no existir usuario
        if(!isset($_SESSION['user'])){

            //redireccionamos
            return $response->withRedirect($this->globals['url'].'/user/signin');

        }
        else{

            
            //inyectamos usuario actual en gestor de usuarios
            $this->auth['user-manager']->setUser($this->auth['user-session']);
            //datos para alimentar la vista
            $viewData=[];

            //usuario a actualizar
            $updateUser=[
                'user'=>$_POST['user'],
                'idLevel'=>$_POST['idLevel']
            ];

            //reglas
            $rules=$this->auth['rules']->getRules([
                'user'=>'alphanumeric',
                'idLevel'=>'digit'
            ]);

            //validamos reglas
            $validation=$this->auth['check']->validation($rules,$updateUser);

            //en caso de fallara la validacion de campos
            if(!$validation['success']){

                //usuario de vista
                $viewData['user']=$usuario;
                //usuarios en lista
                $viewData['users']=$this->auth['user-manager']->index();
                //errores de validacion
                $viewData['errors']=$validation['errors'];
                //nombre de pagina
                $viewData['page']='Gestor de Usuarios';
                //renderizamos vista
                $this->views['dynamic']->render($response,'layout/user/update.php',$viewData);
                
            }
            //en caso de ser exitosa la validacion
            else{
                
                //actualizamos privilegios de usuario
                $this->auth['user-manager']->updatePrivileges($updateUser);
                //tomamos el usuario acualizado
                $viewData['update']=$this->auth['user-manager']->get($updateUser['user']);
                //tomamos el usuario 
                $viewData['user']=$this->auth['user-manager']->getUser()->getUserSession();
                $viewData['users']=$this->auth['user-manager']->index();
                $viewData['page']='Gestor de Usuarios';
                $this->views['dynamic']->render($response,'layout/user/updated.php',$viewData);
                
            }

        }

    }
    //renderizamos eliminacion de usuarios
    public function getDelete($request,$response,$args){

        //mandamos llamar sesion
        session_start();

        //de no existir la sesion de usuario
        if(!isset($_SESSION['user'])){

            //redirigimos a inicio de sesion
            return $response->withRedirect($this->globals['url'].'/user/signin');

        }
        //en caso de existir la sesion de usuario
        else{

            //guardamos usuario en sesion
            
            //usuario actual y sus caracteristicas como A-Array
            
            //inyectamos usuario actual en gestor de usuarios
            $this->auth['user-manager']->setUser($this->auth['user-session']);

            //id a partir de url
            $id = $args['id'];

            //si no existe el usuario
            if(!$this->auth['user-manager']->exists(['id'=>$id])){

                //redirigimos al menu de usuario
                return $response->withRedirect($this->globals['url'].'/user');

            }

            //en caso de existir el usuario
            else{

                //obtenemos el usuario a partir del id y lo agregamos directamente a la vista
                $viewData['delete']=$this->auth['user-manager']->get($id);
                //nombre de pagina
                $viewData['page']='Gestor de Usuarios';
                //usuario actual
                $viewData['user']=$this->auth['user-manager']->getUser()->getUserSession();
                //lista de usuarios
                $viewData['users']=$this->auth['user-manager']->index();
                //renderizamos vista
                $this->views['dynamic']->render($response,'layout/user/delete.php',$viewData);
            }

        }

    }
    //procesamos eliminacion de usuario
    public function postDelete($request,$response,$args){

        //mandamos llamar sesion
        session_start();

        //de no existir la sesion de usuario
        if(!isset($_SESSION['user'])){

            //redirigimos al inisio de sesion
            return $response->withRedirect($this->globals['url'].'/user/signin');

        }

        //de si existir el usuario
        else{

            //guardamos usuario en sesion

            //inyectamos usuario actual en gestor de usuarios
            $this->auth['user-manager']->setUser($this->auth['user-session']);


            //campo de usuario a eliminar
            $deleteUser=['id'=>$_POST['id']];


            //reglas de usuario
            $rules=$this->auth['rules']->getRules(['id'=>'numeric']);
            //validacion de campo
            $validation=$this->auth['check']->validation($rules,$deleteUser);


            //en caso de no validar el campo
            if(!$validation['success']){

                //usuario a eliminar
                $viewData['delete']=$deleteUser;
                //errores de validacion
                $viewData['errors']=$validation['errors'];
                //nombre de pagina
                $viewData['page']='Gestor de Usuarios';
                //usuario en sesion
                $viewData['user']=$this->auth['user-manager']->getUser()->getUserSession();
                //lista de usuario
                $viewData['users']=$this->auth['user-manager']->index();
                //renderizamos plantilla e inyectamos campos de vista
                $this->views['dynamic']->render($response,'layout/user/delete.php',$viewData);
                
            }
            //en caso de validar el campo ejecutamos eliminacion
            else{

                //eliminamos usuario en base a id
                $this->auth['user-manager']->delete($deleteUser['id']);
                //variables para vista
                $viewData['delete']=$deleteUser;
                //nombre de pagina
                $viewData['page']='Gestor de Usuarios';
                //sesion de usuario
                $viewData['user']=$this->auth['user-manager']->getUser()->getUserSession();
                //lista de usuarios
                $viewData['users']=$this->auth['user-manager']->index();
                //renderizamos vista e inyectamos campos
                $this->views['dynamic']->render($response,'layout/user/deleted.php',$viewData);

            }
        
        }


    }

}

?>