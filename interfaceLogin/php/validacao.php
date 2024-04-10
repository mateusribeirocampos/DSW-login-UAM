<?php
// inclui o arquivo de conexão
include('conexao.php');

// verifica se os campos foram preenchidos
if (isset($_POST['email']) && isset($_POST['senha'])) {
    if (empty($_POST['email'])) {
        $msg_erro = 'Preencha seu email';
    } elseif (empty($_POST['senha'])) {
        $msg_erro = 'Preencha sua senha';
    } else {
        // proteção contra SQL Injection para limpar os dados de entrada no banco de dados
        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        // consulta SQL
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do código" . $conexao->error);

        // verifica se o usuário existe
        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            // pega os dados do usuário
            $usuario = $sql_query->fetch_assoc();

            // cria a sessão do usuário
            if (!isset($_SESSION)) session_start();

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: novaPagina.php");
        } else {
            $msg_erro = 'Usuário ou senha inválidos';
        }
    }
}