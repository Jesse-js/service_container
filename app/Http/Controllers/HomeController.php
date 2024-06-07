<?php

namespace App\Http\Controllers;

use App\ConsultaCEP;


class HomeController extends Controller
{
    public function index(ConsultaCEP $consultaCEP)
    {
        $instanciaConsultaCep1 = app()->make(ConsultaCEP::class);
        $instanciaConsultaCep2 = app()->make(ConsultaCEP::class);
        //$consultaCEP->consultar('01001000');
        dd($instanciaConsultaCep1, $instanciaConsultaCep2);
    }
}
