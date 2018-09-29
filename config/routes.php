<?php

use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * RouteCollection: A collection of routes, which map URLs to a set of variables. 
 * A RouteCollection represents a set of Route instances.
 */
$routes = new Routing\RouteCollection();

$routes->add('hello', new Routing\Route('/', array(
    'name' => 'World',
    '_controller' => function (Request $request) {
        return new Response('Hello World');
    })));

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
        'year' => null,
        '_controller' => 'App\Http\Controller\LeapYearController::index',
    )));

    $routes->add('random_number', new Routing\Route('/random/{number}', array(
        'number' => null,
        '_controller' => 'App\Http\Controller\MicroController::randomNumber',
    )));



return $routes;