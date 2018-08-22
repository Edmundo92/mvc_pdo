<?php
require "../bootstrap.php";
use app\classes\Routes;
use app\classes\Uri;
use app\classes\Template;

$routes = [
    '/pdo/' => 'controllers/index',
    '/pdo/create_user' => 'controllers/create_user'
];

//acesso com dois pontos ( :: ) por serem métodos estaticos
$uri = Uri::load();
$template = new Template; //instanciou a classe do Template

require Routes::load($routes, $uri);
require $template->master('template'); //mostrará template o template 
