<?php
    // use Psr\Http\Message\ResponseInterface as Response;
    use Slim\Psr7\Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;
    use Slim\Routing\RouteCollectorProxy;
    
    use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

    use DI\Container;

    require __DIR__ . '/../vendor/autoload.php';

    // Create Container using PHP-DI
    $container = new Container();

    // Set container to create App with on AppFactory
    AppFactory::setContainer($container);

    $app = AppFactory::create();

    $middleware1 = function (Request $request, RequestHandler $handler) { 
        $responseOut = new Response();
        $responseOut->getBody()->write("Antes Middleware 1- ");
        
        $response = $handler->handle($request);

        $existingContent = (string) $response->getBody();
    
        $responseOut->getBody()->write($existingContent . " - Depois Middleware 1");
    
        return $responseOut;
    };

    $middleware2 = function (Request $request, RequestHandler $handler) { 
        $responseOut = new Response();
        $responseOut->getBody()->write("Antes Middleware 2- ");
        
        $response = $handler->handle($request);

        $existingContent = (string) $response->getBody();
    
        $responseOut->getBody()->write($existingContent . " - Depois Middleware 2");
    
        return $responseOut;
    };

    // $app->add($middleware1);
    // $app->add($middleware2);

    require __DIR__ . '/../app/settings.php';
    require __DIR__ . '/../app/dependency.php';
    require __DIR__ . '/../app/rotas.php';

    $app->run();
    
?>




