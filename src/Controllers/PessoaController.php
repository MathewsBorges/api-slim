<?php

namespace Src\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;


use Srs\Views;
use DI\Container;
use Src\Models\Pessoa;

class PessoaController
{
    private $container;
    
 
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getUser(Request $request, Response $response, $args)
    {
        $pessoa = new Pessoa($this->container);


        if (isset($args['id'])) {

            $dados = $pessoa->getUserByID($args['id']);
        } else {
            $dados = $pessoa->getUser();
        }

        $json = json_encode($dados);
        $response->getBody()->write($json);
        return $response->withHeader('Content-type', 'application/json');
    }

    public function getUserByID(Request $request, Response $response, $args)
    {
        $pessoa = new Pessoa($this->container);
        $dados = $pessoa->getUserByID($args['id']);
        var_dump($dados);
        if ($dados != false) {
            $json = json_encode($dados);
        } else {
            $json = json_encode("Usuário Não Encontrado");
        }
        $response->getBody()->write($json);
        return $response->withHeader('Content-type', 'application/json');
    }



    public function insertUser(Request $request, Response $response, $args)
    {

        $pessoaJson = $request->getbody()->__tostring();
        $pessoaObj = json_decode($pessoaJson, true);
        $pessoa = new Pessoa($this->container);
        $dados = $pessoa->insertUser($pessoaObj);
        $json = json_encode($dados);
        $response->getBody()->write($json);
        return $response->withHeader('Content-type', 'application/json');
    }

    public function editUser(Request $request, Response $response, $args)
    {

        $pessoaJson = $request->getbody()->__tostring();
        $pessoaObj = json_decode($pessoaJson, true);
        $pessoa = new Pessoa($this->container);
        $dados = $pessoa->editUser($args['id'], $pessoaObj);
        $json = json_encode($dados);
        $response->getBody()->write($json);
        return $response->withHeader('Content-type', 'application/json');
    }
    public function deleteUser(Request $request, Response $response, $args)
    {
        $pessoa = new Pessoa($this->container);
        $dados = $pessoa->deleteUser($args['id']);
        $json = json_encode($dados);
        $response->getBody()->write($json);
        return $response->withHeader('Content-type', 'application/json');
    }

    public function getLogin(Request $request, Response $response, $args)
    {
        $pessoa = new Pessoa($this->container);
        $pessoaJson = $request->getbody()->__tostring();
        $pessoaObj = json_decode($pessoaJson, true);
        $dados = $pessoa->getLogin($pessoaObj['email'], $pessoaObj['senha']);

        if ($dados != null) {
            session_start();
            var_dump($_SESSION['token']);
            $json = json_encode($dados);
        } else {
            $json = json_encode("Usuário não encontrado");
        }


        $response->getBody()->write($json);
        return $response->withHeader('Content-type', 'application/json');
    }
}
