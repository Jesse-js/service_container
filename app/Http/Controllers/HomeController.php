<?php

namespace App\Http\Controllers;


use Facades\App\ConsultaCepInterface;

class HomeController extends Controller
{
    public function index()
    {
        ConsultaCepInterface::consultar('01001000');
    }
}
