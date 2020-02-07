<?php
//
namespace App\Controllers\Primitives;
use Psr\Container\ContainerInterface as Container;
//
abstract class Controller{

    //container main dependency
    protected $container;
    //app config and order by json
    protected $config;
    //mysql databases
    protected $databases=[];
    //node js socket.io by elephant.io
    protected $auth=[];
    //DAO with  connection to database dependency (from $databases)
    protected $modules=[];
    //template engines
    protected $views=[];

    //construction using dependency inyection
    public abstract function __construct(Container $container);

}
//
?>