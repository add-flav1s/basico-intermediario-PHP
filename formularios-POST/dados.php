<?php


function validationInt() {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    if (isset($_POST['enviar-form'])):
        $erros = array();
        
        if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $erros[] = 'Precisa ser um email valido.';
        endif; 
        if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
            $erros[] = 'Idade precisa ser um numero inteiro.';
        endif; 

        if(!empty($erros)):
            foreach ($erros as $erro) {
                echo "<li> $erro </li>";
            }
        else:
            echo 'Parabens...seus dados estão corretos.';
        endif;
    endif;
    echo  "<br> <hr>" .  'Seu nome é ' . $nome . ' ,você tem ' . $idade . ' anos e seu email é ' . $email . '.';
}

validationInt();