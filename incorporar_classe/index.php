<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

require 'Contato.php';
require 'Usuario.php';

$contato = new Contato(
    'Rua Vergueiro 3185',
    '04101-300',
    '11',
    '5571-2751',
    'Comercial'
);

$usuario = new Usuario('Giovanni', 'Tempobono', $contato);

echo "<p>{$usuario->getNome()}</p>";

echo "<p>{$usuario->getEndereco()}</p>";

echo "<p>{$usuario->getCep()}</p>";

echo "<p>{$usuario->getTelefoneDdd()}</p>";
