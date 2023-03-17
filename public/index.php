<?php
// use Psr\Http\Message\ResponseInterface as Response;
use Slim\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;

use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

use DI\Container;

require __DIR__ . '/../vendor/autoload.php';


$container = new Container();


AppFactory::setContainer($container);

$app = AppFactory::create();


$middlewareAuthentication = function (Request $request, RequestHandler $handler) use ($container) {
    $responseOut = new Response();

    if (isset($request->getHeader('token')[0])) {
        if ($request->getHeader('token')[0] == $container->get('settings')['authentication']['token']) {
            $response = $handler->handle($request);
            $existingContent = (string) $response->getBody();
            $responseOut->getBody()->write($existingContent);
        } else {
            $responseOut->getBody()->write("Token Inválido");
        }
    } else {
        $responseOut->getBody()->write("Usuário não autenticado");
    }


    return $responseOut;
};



require __DIR__ . '/../app/settings.php';
require __DIR__ . '/../app/dependency.php';
require __DIR__ . '/../app/rotas.php';

$app->run();
