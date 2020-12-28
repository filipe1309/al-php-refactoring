<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

class Cep
{
    private $cep;

    public function __construct(string $cep) {
        $this->cep = $cep;
    }

    public function getCep(): string
    {
        return $this->cep;
    }
}
