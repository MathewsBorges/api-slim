<?php
use Slim\Views\PhpRenderer;
$container = $app->getContainer(); 

$container->set('BDconexao', function ($c) {
    $configuracao = $c->get('settings')['BancoDeDados'];
    
    $bdname = $configuracao['dbname'];
    $password = $configuracao['password'];
    $user = $configuracao['user'];
    $host = $configuracao['host'];
    $driver = $configuracao['driver'];

    $dsn = $driver . ":dbname=" . $bdname . ";host=" . $host;    

    try {
        $con = new \PDO($dsn, $user, $password);
        return $con;
    } catch (\Throwable $th) {
        return null;
    }
});



?>