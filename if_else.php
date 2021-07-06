<?php

$age = 17;
$maior = 18;
$name = 'Maria';

if ($age>=$maior) {
    echo $name . ' é maior de idade, tem ' . $age . ' anos e ja pode ser presa. ' . PHP_EOL;
}
else echo $name . ' é menor de idade, tem ' . $age . ' anos e não pode ser presa. ' . PHP_EOL;