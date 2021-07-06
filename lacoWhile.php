<?php
//RPG basic:

$totalPontos = 100;
$maxTotalPontos = 100;

$danoMonstro = 15;

echo "Seu HP inicial no game é: $totalPontos." . PHP_EOL;

while ($totalPontos > 0){
    echo "HP: $totalPontos/$maxTotalPontos" . PHP_EOL;
    echo "Personagem atacado! -$danoMonstro de HP! " . PHP_EOL;

    $totalPontos-=$danoMonstro;

    if ($totalPontos<=0){
        echo "Seu personagem die." . PHP_EOL;
    }

}