<?php
$app->get('/', \App\Controllers\Page\HomeController::class.':index');
$app->get('/info', \App\Controllers\Page\HomeController::class.':info');
?>