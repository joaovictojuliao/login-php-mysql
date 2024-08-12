<?php 

$usuario = 'root';
$senha = 'YMLssi13265';
$database = 'login';
$host = 'mysql.joaojuliao.com.br';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar no banco de dados: ". $mysqli->error);
}

