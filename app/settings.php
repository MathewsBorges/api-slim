<?php

$container = $app->getContainer(); 

$container->set('settings', function () {
    return [
        "BancoDeDados" => 
            [
                "dbname" => "ProgWebII",
                "driver" => "pgsql",
                "user"   =>  "postgres",
                "password"  => "12345",
                "host"  => "localhost"
            ],
        "authentication" => 
            [
                "token" => "tokengeradocomsucesso",
                "segundoParametro" => "ok"   
            ]    
    ];
});

?>