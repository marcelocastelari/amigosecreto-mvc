<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/cadastro', 'CadastroController@cadastro');
$router->post('/cadastro', 'CadastroController@cadAction');

$router->get('/cadastro/{id}/editar', 'CadastroController@edit');
$router->post('/cadastro/{id}/editar', 'CadastroController@editAction');

$router->get('/cadastro/{id}/excluir', 'CadastroController@del');

$router->get('/sorteio', 'SorteioController@sorteio');

$router->get('/busca', 'BuscaController@busca');