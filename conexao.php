<?php 

$usuario = 'root';
$senha = 'YMLssi13265';
$database = 'login';
$host = '10.100.24.216';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar no banco de dados: ". $mysqli->error);
}

