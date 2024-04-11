<?php

include 'conexao.php';

include 'validacao.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylesLogin.css">
    <title>Autenticação</title>
</head>
<body>
    <header>
        <h1>Autenticação do Usuário</h1>
        <p>Informe seu email e senha para acessar o sistema</p>
    </header>

    <main>
        <h2>Login</h2>
        <div class="container">

        <?php if(isset($msg_erro)): ?>
            <p class="erro"><?php echo $msg_erro; ?></p>
        <?php endif; ?>

            <form action="" method="post">
                <div class="form-grupo">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="form-grupo">
                    <label for="senha">Senha: </label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                    <p>Ainda não tem cadastro? <a href="">Cadastra-se</a></p>
                </div>

                <button type="submit">Entrar</button>
                
            </form>
        </div>
    </main>

    <footer>
        <p>Desenvolvimento de software<br> para Web&copy; 2024</p>
    </footer>
    
</body>
</html>