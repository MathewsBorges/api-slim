<?php

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;
    use Slim\Routing\RouteCollectorProxy;
    use Psr\Container\ContainerInterface;
    use Src\Models\Pessoa;
    use Src\Controllers\PessoaController;
    
    use DI\Container;



    $app->get('/', function (Request $request, Response $response, $args) {
    
        $response->getbody()->write('Painel Principal');
        return $response;
    });


    $app->group('', function (RouteCollectorProxy $group) use($container) {        
        $group->get('/usuario[/{id}]', PessoaController::class . ':getUser');
        $group->post('/usuario', PessoaController::class . ':insertUser');
        $group->put('/usuario/{id}', PessoaController::class . ':editUser');
        $group->delete('/usuario/{id}', PessoaController::class . ':deleteUser');

    })->add($middlewareAuthentication);


   $app->post('/login', PessoaController::class . ':getLogin');
