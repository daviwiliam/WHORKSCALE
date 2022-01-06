<?php
include ('conect.php');

if(isset($_POST['matricula']) || isset($_POST['senha'])) {

    if(strlen($_POST['matricula']) == 0) {
        $msg = "Preencha sua matrícula";
    } elseif(strlen($_POST['senha']) == 0) {
        $msg = "Preencha sua senha";
    } else {

        $matricula = $mysqli->real_escape_string($_POST['matricula']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM users WHERE matricula = '$matricula' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL" . $mysli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade <= 1) {

            $user = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }
            
            $_SESSION['matricula'] = $user['matricula'];
            $_SESSION['senha'] = $user['senha'];
            $_SESSION['equipe'] = $user['equipe'];
            $_SESSION['nome'] = $user['nome'];

            header("Location: content.php");

        } else {
            $msg = "Matrícula ou senha incorretos";
        }
    }

}
?>