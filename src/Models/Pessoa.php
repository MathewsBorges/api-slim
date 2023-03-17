<?php

namespace Src\Models;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;


use Srs\Views;
use DI\Container;

class Pessoa
{
    private $container;

    // constructor receives container instance
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getLogin($email, $senha)
    {


        $con = $this->container->get('BDconexao');
        $query = "select * from usuarios where email='$email' and senha='$senha'";
        $stmt = $con->prepare($query);
        $stmt->execute();
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $dados;
    }


    public function getUser()
    {

        $con = $this->container->get('BDconexao');
        $query = "select * from usuarios";
        $stmt = $con->prepare($query);
        $stmt->execute();
        $dados = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $dados;
    }

    public function getUserByID($id)
    {

        $con = $this->container->get('BDconexao');
        $query = "select * from usuarios where id=$id";
        $stmt = $con->prepare($query);
        $stmt->execute();
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        if ($dados != null) {
            return $dados;
        } else {
            return "Usuario nao encontrado";
        }
    }

    public function insertUser($pessoaObj)
    {
        $dados = "";


        $con = $this->container->get('BDconexao');

        if (!empty($pessoaObj['nome']) && !empty($pessoaObj['email']) && !empty($pessoaObj['senha'])) {
            $check = $this->getUserByEmail($pessoaObj['email']);

            if (empty($check)) {
                $query = "insert into usuarios (nome, email, senha) values (:nome, :email, :senha)";
                $stmt = $con->prepare($query);
                $stmt->bindValue(":nome", $pessoaObj['nome']);
                $stmt->bindValue(":email", $pessoaObj['email']);
                $stmt->bindValue(":senha", $pessoaObj['senha']);
                $stmt->execute();
                $dados = 'Usuario Adicionado Com Sucesso';
            } else {
                $dados = 'Email em Uso, nao foi possivel cadastrar';
            }
        } else {
            $dados = 'Os parametros Nome, Email, Senha devem ser espeficidados';
        }

        return $dados;
    }



    public function getUserByEmail($email)
    {

        $con = $this->container->get('BDconexao');
        $query = "select * from usuarios where email='$email'";
        $stmt = $con->prepare($query);
        $stmt->execute();
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $dados;
    }


    public function editUser($id, $pessoaObj)
    {


        if (!empty($pessoaObj['nome']) && !empty($pessoaObj['senha'])) {

            $nome = $pessoaObj['nome'];
            $senha = $pessoaObj['senha'];

            $con = $this->container->get('BDconexao');
            $query = "update usuarios set nome='$nome', senha='$senha' where id=$id";
            $stmt = $con->prepare($query);
            $stmt->execute();
            $dados = 'Usuario Editado Com Sucesso';
        } else {
            $dados = 'Parametros Nome e senha devem ser especificados';
        }

        return $dados;
    }

    public function deleteUser($id)
    {
        $con = $this->container->get('BDconexao');
        $query = "delete from usuarios where id=$id";
        $stmt = $con->prepare($query);
        $stmt->execute();
        $dados = 'Usuario Deletado Com Sucesso';
        return $dados;
    }
}
