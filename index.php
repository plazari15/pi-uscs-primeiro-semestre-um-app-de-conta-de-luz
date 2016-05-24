<?php 
// Aqui está o require do framework
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once ("_app/Config.inc.php");

/**
 * Rotas do site
 */
//Inicia o App
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$App = new \Slim\App($c);


//Apresentando as rotas do site
$App->get('/', function () {
    Render('index.php');
});


$App->get('/sobre/quem-somos', function () {
    Render('quem_somos.php');
});

$App->get('/sobre/time', function () {
    Render('time.php');
});

$App->get('/calculadora', function () {
    Render('calculadora.php');
});

$App->get('/graficos', function () {
    Render('graficos.php');
});

$App->get('/dashboard/login', function () {
    Render('Login.php');
});

$App->get('/dashboard', function () {
    Render('Dashboard.php');
});

$App->get('/cadastro', function () {
    Render('cadastro.php');
});



$App->post('/action/login', function () {
    
});



$App->get('/books', function ($request, $response, $args) {
    Render('index.php');
});


$App->run();