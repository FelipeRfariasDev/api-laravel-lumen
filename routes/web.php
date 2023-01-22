<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('', function () use ($router) {
    return "Bem vindo!";
});

$router->group(['prefix' => 'cursos'], function() use($router){
    $router->get('/', 'CursoController@index');
    $router->get('/{id}', 'CursoController@show');
    $router->post('/','CursoController@store');
    $router->put('/{id}', 'CursoController@update');
    $router->delete('/{id}', 'CursoController@destroy');
});

$router->group(['prefix' => 'usuarios'], function() use($router){
    $router->get('/', 'UsuarioController@index');
    $router->get('/{id}', 'UsuarioController@show');
    $router->post('/','UsuarioController@store');
    $router->put('/{id}', 'UsuarioController@update');
    $router->delete('/{id}', 'UsuarioController@destroy');
});
