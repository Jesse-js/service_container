<?php

namespace App;

class ConsultaCep implements ConsultaCepInterface
{
    public function __construct(
        private string $apiKey
    ) {

    }

    public function consultar(string $cep): void
    {
        echo "minha chave: " . $this->apiKey. "<br>";
        echo "meu endereço: " . $cep;
    }
}
