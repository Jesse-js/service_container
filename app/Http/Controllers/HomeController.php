<?php

namespace App\Http\Controllers;

use App\ConsultaCEP;


class HomeController extends Controller
{
    public function index(ConsultaCEP $consultaCEP)
    {
        $consultaCEP->consultar('01001000');
    }
}
