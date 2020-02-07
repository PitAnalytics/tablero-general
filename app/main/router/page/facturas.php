<?php
$app->get('/facturas', \App\Controllers\Page\FacturasController::class.':index');
$app->get('/facturas/validacion/simple', \App\Controllers\Page\FacturasValidacionController::class.':simpleGet');
$app->post('/facturas/validacion/simple', \App\Controllers\Page\FacturasValidacionController::class.':simplePost');
?>
