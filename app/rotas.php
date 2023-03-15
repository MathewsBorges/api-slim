<?php

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;
    use Slim\Routing\RouteCollectorProxy;
    use Psr\Container\ContainerInterface;
    use Src\Models\Pessoa;
    use Src\Controllers;

    
    use Srs\Views;
    use DI\Container;


    $viewPath ='../views/login.php';
    use Slim\Views\PhpRenderer;

   

    // $container = $app->getContainer(); 
    // $view = $container->get('view');

// ----------------------- Início de exemplo de CRIAÇÃO de rotas ---------------------------------------
    // Método GET na rota Home
    $app->get('/', function (Request $request, Response $response, $args) {
    
        $renderer = new PhpRenderer('../src/views');
        return $renderer->render($response, "login.php", $args);
    
    });

    $app->get('/registrar', function (Request $request, Response $response, $args) {
    
        $renderer = new PhpRenderer('../src/views');
        return $renderer->render($response, "registrar.php", $args);
    
    });

    $app->get('/menu', function (Request $request, Response $response, $args) {
    
        $renderer = new PhpRenderer('../src/views');
        return $renderer->render($response, "menu.php", $args);
    
    });

    
    $app->get('/lista', function (Request $request, Response $response, $args) {
    
        $renderer = new PhpRenderer('../src/views');
        return $renderer->render($response, "lista.php", $args);
    
    });

    $app->get('/cadastrar', function (Request $request, Response $response, $args) {
    
        $renderer = new PhpRenderer('../src/views');
        return $renderer->render($response, "cadastrar.php", $args);
    
    });
 

    $app->get('/sair', function (Request $request, Response $response, $args) {
    
        $renderer = new PhpRenderer('../src/views');
        LoginController::class . ':sair';
        return $renderer->render($response, "login.php", $args);
    
    });




    // Buscar todos os alunos 
    $app->get('/aluno', function (Request $request, Response $response, $args) {
        // Aqui você deve fazer a busca no BD para retornar a lista de todos os alunos e depois
        // colocar essa lista no corpo de RESPOSTA
        $response->getBody()->write("Bem vindo a rota de ALUNOS");
        return $response;
    }); 

    // Buscar aluno pelo ID. Utilizamos placeholders '{}'
    $app->get('/aluno/{id}', function (Request $request, Response $response, $args) {
        // Aqui você deve fazer a busca no BD para retornar o aluno e depois
        // colocar os dados dese aluno no corpo de RESPOSTA
        $id = $args['id'];
        $response->getBody()->write("Bem vindo a rota de ALUNO com o id: " .$id);
        return $response;
    });
    // Rota aluno com o método POST. Insere um novo registro de aluno
    $app->post('/aluno', function(Request $request, Response $response, $args ){
        $alunoJson = $request->getbody()->__tostring();     // recupera o conteúdo json no corpo da REQUISIÇÃO
       // $alunoObj = json_decode($alunoJson);
        
        echo '<pre>';
        var_dump($alunoJson);
        echo '</pre>';

        $response->getbody()->write('Bem vindo a rota ALUNO com o método POST');
        return $response;
    });
    
// ----------------------- Início de exemplo de AGRUPAMENTO de rotas ---------------------------------------
    // Agrupando rotas. Nesse exemplo, consideramos que queremos fazer diferentes versões
    // da configuração de rotas do nosso sistema. Então vamos criar dois grupos: v1 e v2
    // teremos, dentro de cada grupo, uma rota para pessoa e outra rota para produto
    $app->group('/v1',  function (RouteCollectorProxy $group){

        // Busca o(s) carro(s) (GET). ID opcional. Rota para acessar esse recurso: localhost:porta/v1/carro ou localhost:porta/v1/carro/2
        $group->get('/carro[/{id}]', function (Request $request, Response $response, $args) {
            if( isset( $args['id'] ) )
            {
                $id = $args['id'];
                $response->getBody()->write("Bem vindo a rota de CARRO com o id: " .$id . " dentro do grupo V1");
            }
            else
                $response->getBody()->write("Bem vindo a rota de CARRO dentro do grupo V1");

            return $response;
        });

        // Busca o produto (GET). ID opcional. Rota para acessar esse recurso: localhost:porta/v1/carro ou localhost:porta/v1/carro/2        
        $group->get('/produto', function (Request $request, Response $response, $args) {
            $response->getBody()->write("Rota PRODUTO Dentro do grupo V1");
            return $response;
        });
    });

    $app->group('/v2',  function (RouteCollectorProxy $group){
        
        // Busca o(s) carro(s) (GET). ID opcional. Rota para acessar esse recurso: localhost:porta/v2/carro ou localhost:porta/v2/carro/2
        $group->get('/carro[/{id}]', function (Request $request, Response $response, $args) {
            if( isset( $args['id'] ) )
            {
                $id = $args['id'];
                $response->getBody()->write("Bem vindo a rota de CARRO com o id: " .$id . " dentro do grupo V2");
            }
            else
                $response->getBody()->write("Bem vindo a rota de CARRO dentro do grupo V2");

            return $response;
        });

        // Busca o produto (GET). ID opcional. Rota para acessar esse recurso: localhost:porta/v2/produto ou localhost:porta/v2/produto/2        
        $group->get('/produto', function (Request $request, Response $response, $args) {
            $response->getBody()->write("Rota PRODUTO Dentro do grupo V2");
            return $response;
        });
    });

    // Outro exemplo
    $app->group('/servico', function (RouteCollectorProxy $group) {
        
        // Busca (GET) os(s) registro(s) de serviço(s)
        $group->get('/{id}', function(Request $request, Response $response, $args ){
            $response->getbody()->write('Bem vindo a rota para buscar registro de SERVIÇO, com o método GET, dentro do grupo SERVIÇO');
            return $response;
        });

        // Cria uma novo registro (POST) de serviço
        $group->post('', function(Request $request, Response $response, $args ){
            $response->getbody()->write('Bem vindo a rota para inserir um novo registro de SERVIÇO, com o método POST, dentro do grupo SERVIÇO');
            return $response;
        });
        
        // Busca (GET) o valor de um determinado ID
        $group->get('/{id}/valor', function(Request $request, Response $response, $args ){
            $response->getbody()->write('Bem vindo a rota VALOR dentro do grupo SERVIÇO');
            return $response;
        });
    });
// ----------------------- Início de exemplo de CONTROLADOR EXTERNO ---------------------------------------    
    // Temos que fazer o "import" da classe. Linha 09 desse script: use App\Controllers\Pessoa;
    
    // Busca pessoa com ID opcional.     
    $app->get('/pessoa[/{id}]', Pessoa::class . ':getPessoa');




    $app->post('/pessoa', Pessoa::class . ':salvar');
    
    $app->get( '/pessoa/{id}/departamento', Pessoa::class . ':getDepartamento');

    // Se existir a rotas CARRO, temos que implementar o classe Carro em App\Controllers


// --- Início de exemplo de ADICIONAR MIDDLEWARE em um grupo de rotas -----------------
    $app->group('/testeMiddleware', function (RouteCollectorProxy $group) {        
        // Busca (GET) os(s) registro(s) de serviço(s)
        $group->get('', function(Request $request, Response $response, $args ){
            $response->getbody()->write('Bem vindo a rota testeMiddleware, com o método GET, passando pelo Middleware');
            return $response;
        });

        // Cria uma novo registro (POST) de serviço
        $group->post('', function(Request $request, Response $response, $args ){
            $response->getbody()->write('Bem vindo a rota testeMiddleware, com o método GET, passando pelo Middleware');
            return $response;
        });
    })->add($middleware1);



    $app->POST('/login', function(Request $request, Response $response, $args ){
        // $login = $request->getbody()->__tostring(); 
        // $loginObj = json_decode($login);
        echo json_encode($_POST);
      //  return $response;
     });
 



?>