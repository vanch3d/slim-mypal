<?php
// Routes

$app->get('/', App\Action\HomeAction::class)
    ->setName('homepage');


$app->get('/admin', App\Action\AdminAction::class)
    ->setName('adminpage');


$app->get('/osce',App\Action\HomeAction::class . ':showOSCE')
    ->setName('oscepage');

