<?php

$servername = '127.0.0.1'; 
$username = 'root';
$password = '';
$dbname = 'login';

// conexão
$conexao = mysqli_connect($servername, $username, $password, $dbname)
	or die('Erro na conexção ' . mysqli_connect_error());
