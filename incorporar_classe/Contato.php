<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

class Contato
{
    private $endereco;

    public function __construct(string $endereco) {
        $this->endereco = $endereco;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }
}
