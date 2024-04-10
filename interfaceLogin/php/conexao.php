<?php
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'login';

// conexão com banco de dados
$mysqli = new mysqli($servername, $username, $password, $dbname);

if($mysqli->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $mysqli->connect_error);
}