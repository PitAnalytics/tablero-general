<?php
//
namespace Core\Controllers\Templates;
//
use Psr\Container\ContainerInterface as ContainerInterface;
use Core\Controllers\Interfaces\ControllerInterface as ControllerInterface;
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
    //construction using pimple container dependency inyection
    public abstract function __construct(ContainerInterface $container);

}
//
?>