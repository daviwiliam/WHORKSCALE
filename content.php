<?php

include ('sec.php');
include ('info.php');
include ('date.php');

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
    <div class="head logo">
        <h1>Work Scale</h1>
        <img src="images/icon2.png">
        <a href="logout.php">Sair</a>
    </div> 
    <div class="welcome">
        <h3>Olá <?php echo $nome; ?>, seja bem-vindo!</h3> 
    </div>
    <div class="titlescale">
        <h1>Sua escala</h1>
    </div>
    <div class="area">
        <div class="scale">
            <div class="today">
                <h1>Hoje</h1>
            </div>
            <div class="data">
                <div class="dia"><?php echo $dia?></div>
                <div class="mes"><?php echo $mes?></div>
                <div class="ano"><?php echo $ano?></div>
            </div>
            <div class="infoscale">
                <p><?php echo $scale; ?></p>
            </div>
        </div>
    </div>
    <div class="footer"><p>© 2022 todos os direitos reservados</p></div>
</body>
</html>