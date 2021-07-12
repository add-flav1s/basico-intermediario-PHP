<?php

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    if ($media >= 7):
        echo $nome . ', parabéns, você foi aprovado com média de: ' . $media;
    else:
        echo $nome . ', foi reprovado com média de: ' . $media;
    endif;
};

calcularMedia('Joao matheus', 5, 7, 7, 9);