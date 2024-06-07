<?php

namespace App;

interface ConsultaCepInterface
{
    public function consultar(string $cep): void;
}
