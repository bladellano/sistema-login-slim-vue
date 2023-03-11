<?php

use Slim\App;

use app\controllers\LoginController;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {

    $app->options('/{routes:.+}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function(Request $request,Response $response){
        echo 'Working...';
        return response;
    });

    $app->post('/login', [LoginController::class,'store']);
};
