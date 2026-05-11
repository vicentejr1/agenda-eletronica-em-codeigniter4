<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

//if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
//    require SYSTEMPATH . 'Config/Routes.php';
//}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');

// Rota explícita de teste para o controller Atividades
//$routes->get('atividades/listar', 'Atividades::listar');
