<?php
namespace Src\Cotnrollers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

function __construct(){}


function sair(){
session_start();
session_unset();




}

function login(Request $request, Response $response){
$post = json_decode(file_get_contents('php://input'), true);
header('location: /menu');
echo json_encode($_POST);


}