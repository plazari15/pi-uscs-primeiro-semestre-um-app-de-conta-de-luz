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

$App->get('/resultado', function () {
    Render('resultado.php');
});

$App->get('/graficos', function () {
    Render('graficos.php');
});

$App->get('/medir/calculadora', function () {
    Render('medir-calculadora.php');
});

$App->get('/medir/sobre', function () {
    Render('sobre-medir.php');
});

$App->get('/ranking', function () {
    Render('Ranking.php');
});

$App->get('/dashboard/login', function () {
    Render('Login.php');
});

$App->get('/dashboard/calculos', function () {
    Render('Dash-Calculos.php');
});

$App->get('/dashboard', function () {
    Render('Dashboard.php');
});

$App->get('/dashboard/conta', function () {
    Render('Conta.php');
});

$App->get('/dashboard/token', function () {
    Render('Token.php');
});

$App->get('/dashboard/ranking', function () {
    Render('Dash-Ranking.php');
});

$App->get('/dashboard/sair', function () use($App) {
    unset($_SESSION['userlogin']);
   header('Location: '.HOME.'/dashboard/login');
});

$App->get('/politica', function () use($App) {
    Render('politica.php');
});

$App->get('/cadastro', function () {
    Render('cadastro.php');
});



$App->run();