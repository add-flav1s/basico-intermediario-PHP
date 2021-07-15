<?php


if (isset($_POST['enviar-form'])):
    $erros = array();
        
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $nome;
    echo "<hr>";

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[] = 'Email inválido.';
    endif;
    echo "<hr>";

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)):
        $erros[] = 'Idade precisa ser um numero inteiro.';
    endif;
    echo "<hr>";
    
    if(!empty($erros)):
        foreach ($erros as $erro) {
            echo "<li> $erro </li>";
        }
    else:
        echo 'Parabens...seus dados estão corretos.';
    endif;
endif;