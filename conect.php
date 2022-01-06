<?php

    $user = 'root';
    $password = '';
    $database = 'workscale';
    $host = '127.0.0.1';

    $mysqli = new mysqli($host, $user, $password, $database);

    if($mysqli->error) {
        die("Error 404" . $mysqli->error);
    }
?>