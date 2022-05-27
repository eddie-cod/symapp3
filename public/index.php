<?php

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

use App\Kernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$name = $request->get('name');
$nom = $request->get('nom');
header('Content-Type: text/html; charset=utf-8');

$response->setContent('<html><body><h1>Hello World! '.$name.' -> '.$nom.'</h1></body></html>');
$response->send();






// return function (array $context) {
//     return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
// };
