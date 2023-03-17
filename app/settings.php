<?php

$container = $app->getContainer(); 

$container->set('settings', function () {
    return [
        "BancoDeDados" => 
            [
                "dbname" => "estoque",
                "driver" => "pgsql",
                "user"   =>  "postgres",
                "password"  => "1234",
                "host"  => "localhost"
            ],
        "authentication" => 
            [
                "token" => "tokengeradocomsucesso",
               
            ]    
    ];
});

?>