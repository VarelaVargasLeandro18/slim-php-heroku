<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once '../vendor/autoload.php';



$app = new \Slim\App([]);



$app->get('[/]', function (Request $request, Response $response) {    
    $response->getBody()->write("GET => Varela Vargas Leandro.");
    return $response;

});


$app->run();
