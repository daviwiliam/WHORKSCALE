<?php

include('login.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <title>Work Scale</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="head">
                <h1>Work Scale</h1>
                <img src="images/icon.png">
            </div>
            <form action="" method="POST">
                <div class="matricula">
                    <label>Matrícula</label>
                    <input name="matricula" type="text" placeholder="Digite sua matrícula...">
                </div>
                <div class="senha">    
                    <label>Senha</label>
                    <input name="senha" type="password" placeholder="Digite sua senha..."> 
                </div>
                <input name="botao" class="botao" type="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>
</html>