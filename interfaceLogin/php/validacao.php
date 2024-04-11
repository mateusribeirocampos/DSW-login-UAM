<?php
// inclui o arquivo de conexão
include 'conexao.php';

// verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // verifica se os campos foram preenchidos
    if (empty($_POST['email']) || empty($_POST['senha'])) {
        echo 'Preencha todos os campos';
    } else {
        // proteção contra SQL Injection para limpar os dados de entrada no banco de dados
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        // consulta SQL
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die('Falha na execução do código' . $mysqli->error);

        // verifica se o usuário existe
        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            // pega os dados do usuário
            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            // cria a sessão do usuário
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header('Location: novaPagina.php');
            exit(); // encerra o script
        } else {
            echo 'Usuário ou senha inválidos';
        }
    }
}