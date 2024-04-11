<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    die("<div style='text-align: center; margin: 70px;'>
            <h1>Você não pode acessar esta página diretamente. Faça o login.</h1>
            <div style='margin: 50px;'>
                <button style='background-color: #333; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;'> <a href='index.php' style='color: #fff; text-decoration: none;'>Entrar</a></button>
            </div>
        </div>");
}
