<?php
namespace Src\Models;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;


class Pessoa{
    private $container;

    // constructor receives container instance
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getPessoa(Request $request, Response $response, $args) {
        
        $con = $this->container->get('BDconexao');
        
        $query = "select * from pessoa";
        $stmt = $con->prepare($query);
        $stmt->execute();
        $dados = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        echo '<pre>';
        print_r($dados);
        echo '</pre>';
        
        // if( isset( $args['id'] ) )
        // {
        //     $id = $args['id'];
        //     $response->getBody()->write("Bem vindo a rota de PESSOA com o id: " .$id . " Implementada em um controlador externo");
        // }
        // else
        //     $response->getBody()->write("Bem vindo a rota de PESSOA Implementada em um controlador externo");

        return $response;
    }

    public function salvar(Request $request, Response $response, $args) {
        $pessoaJson = $request->getbody()->__tostring();
        $pessoaObj = json_decode($pessoaJson);
        
        $response->getBody()->write("Você enviou os seguintes chaves e valores:\n");
        foreach ($pessoaObj as $key => $value) {
            $response->getBody()->write( "Chave: " . $key . ", Valor: " . $value . "\n");
        }
        return $response;
    }

    public function getDepartamento(Request $request, Response $response, $args) {
        $id = $args['id'];
        // Aqui pegaremos um array estático, na sua aplicação você deve fazer as manipulações dos dados em um Banco de dados
        $pessoaObj = ['nome' => 'Maria', 'idade' => 22, 'Sexo' => 'F', 'Departamento' => 'Sei lá'];
        $pessoaJson = json_encode($pessoaObj);
        $response->getBody()->write($pessoaJson);
        return $response->withHeader('Content-type', 'application/json');   
        // Content-Type diz para o client qual é o tipo de conteúdo que a resposta
        //Veja o exemplo em: https://www.slimframework.com/docs/v4/objects/response.html#the-response-headers
    }
}
?>