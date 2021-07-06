<?php
//Switch estudos:

$salary = 1500;

switch($salary){
    case $salary > 1500:
        echo 'Voce ganha bem.';
        break;
    case $salary < 1500:
        echo 'Voce ganha mal.';
        break;
    default:
        echo 'Está ok.';

}