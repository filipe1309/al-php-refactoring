<?php declare(strict_types=1);

function verificaSeEmailEhValido(): string
{
    $email = $_GET['email'];
    $mensagem = "O seu e-mail é: " . $email;
    $mensagemErro = "O seu e-mail não é válido";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $mensagem;
    }
    
    return $mensagemErro;
}

echo verificaSeEmailEhValido();
