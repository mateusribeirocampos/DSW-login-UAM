<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylesNovaPagina.css">
    <title>Nova Página</title>
</head>
<body>
    <h1>Bem vindo a nova página, <?php echo $_SESSION['nome']; ?></h1>

    <button><a href="logout.php">Sair</a></button>
</body>
</html>