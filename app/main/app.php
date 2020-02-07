<?php
/************************/
/*****PSR-7-INTERFACE****/
/************************/
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
/************************/
/*****SLIM-INSTANCE******/
/************************/
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
        'responseChunkSize' => 8096
    ]
]);
/*********************/
/******CONTAINER******/
/*********************/
require_once '../app/main/container/main.php';
require_once '../app/main/container/database.php';
require_once '../app/main/container/views.php';
require_once '../app/main/container/modules.php';
require_once '../app/main/container/validation.php';
require_once '../app/main/container/user.php';
/******************/
/****ROUTER********/
/******************/
require_once '../app/main/router/page/home.php';
require_once '../app/main/router/page/user.php';
require_once '../app/main/router/page/datastudio.php';
require_once '../app/main/router/page/facturas.php';
require_once '../app/main/router/page/balanza.php';
/******************/
/****EJECUTAMOS****/
/******************/
$app->run();
?>