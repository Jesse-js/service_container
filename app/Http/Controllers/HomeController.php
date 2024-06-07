<?php

namespace App\Http\Controllers;


use App\ConsultaCepInterface;

class HomeController extends Controller
{
    public function index(ConsultaCepInterface $consultaCEP)
    {
        $consultaCEP->consultar('01001000');
    }
}
