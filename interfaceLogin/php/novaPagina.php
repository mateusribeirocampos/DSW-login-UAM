<?php

if (!isset($_SESSION)) {
	session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Página</title>
</head>
<body>
    <h1>Bem vindo ao nova página, <?php echo $_SESSION['nome']; ?></h1>
</body>
</html>