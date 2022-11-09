<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="funcoes.js"></script>
</head>
<body>
    TESTE
    <br>
    <?php
        session_start();
    ?>
    <form method="POST" action="teste.php?somatorio=<?php echo $_SESSION['somatorio'];?>">
        <input type="button" value="botao add 10" onclick="somatorio(10)">
        <br>
        <input type="button" value="botao add 20" onclick="somatorio(20)">
        <br>
        <input type="submit" value="botao Enviar para Servidor" onclick="teste()">
    </form>
    
</body>
</html>