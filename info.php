<?php


$nome = $_SESSION['nome'];
$equipe = $_SESSION['equipe'];
$day = date('w');


if($equipe == 01 && $day % 2 == 0) {
    $scale = 'Você irá trabalhar das 8:00 às 20:00';

} elseif($equipe == 02 && $day % 2 == 0) {
    $scale = 'Você irá trabalhar das 20:00 às 8:00';

} elseif($equipe == 03 && $day % 2 > 0) {
    $scale = 'Você irá trabalhar das 8:00 às 20:00';

} elseif($equipe == 04 && $day % 2 > 0) {
    $scale = 'Você irá trabalhar das 20:00 às 8:00';

} else {
    $scale = 'Você está de folga';
}


?>