<?php

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

use App\Kernel;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

// return function (array $context) {
//     return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
// };

$name = $request->get('name');
$nom = $request->get('nom');
header('Content-Type: text/html; charset=utf-8');
echo '<html>';
var_dump($name);
var_dump($nom);

echo '<body><h1>Hello World! '.$name.' -> '.$nom.'</h1></body>';
echo '</html>';

