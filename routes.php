<?php
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('/', function () {
    include './app/views/home.php';
});

SimpleRouter::get('/home', function () {
    include './app/views/home.php';
});

SimpleRouter::get('/login', function () {
    include './app/views/login.php';
});

SimpleRouter::group(['prefix' => '/persona'], function () {
    SimpleRouter::get('/', function () { include './app/views/persona/persona.php';});
    SimpleRouter::get('/getAll', 'persona\personaController@getAll');
    SimpleRouter::get('/{id}', 'persona\personaController@get');
    SimpleRouter::post('/insertUpdate', 'persona\personaController@insertUpdate');
});