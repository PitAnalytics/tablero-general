<?php
$app->get('/data-studio/project', \App\Controllers\Page\DataStudioController::class.':index');
$app->get('/data-studio/project/{id:[0-9]}', \App\Controllers\Page\DataStudioController::class.':get');
?>
