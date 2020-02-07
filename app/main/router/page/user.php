<?php
$app->get('/user', \App\Controllers\Page\UserController::class.':index');
//
$app->get('/user/signin', \App\Controllers\Page\UserController::class.':getSignin');
$app->post('/user/signin', \App\Controllers\Page\UserController::class.':postSignin');
//
$app->get('/user/signup', \App\Controllers\Page\UserController::class.':getSignup');
$app->post('/user/signup', \App\Controllers\Page\UserController::class.':postSignup');
//
$app->get('/user/signout', \App\Controllers\Page\UserController::class.':signout');
//
$app->get('/user/delete/{id}', \App\Controllers\Page\UserController::class.':getDelete');
$app->get('/user/update/{id}', \App\Controllers\Page\UserController::class.':getUpdate');
//
$app->post('/user/delete', \App\Controllers\Page\UserController::class.':postDelete');
$app->post('/user/update', \App\Controllers\Page\UserController::class.':postUpdate');
?>