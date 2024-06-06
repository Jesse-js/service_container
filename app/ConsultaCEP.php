<?php

namespace App;

class ConsultaCEP
{
    public function __construct(
        private string $apiKey
    ) {

    }

    public function consultar(string $cep)
    {
        echo "minha chave: " . $this->apiKey. "<br>";
        echo "meu endereço: " . $cep;
    }
}
