<?php

namespace App\Http\Controllers;


use App\ConsultaCepInterface;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(SessionManager $sessionManager, ConsultaCepInterface $consultaCEP)
    {

        session()->put('test', 'treinaweb');
        echo session()->get('test');
        echo '<br/>';

        $sessionManager->put('test', 'treinaweb');
        echo $sessionManager->get('test');
        echo '<br/>';
        
        Session::put('test', 'treinaweb');
        echo Session::get('test');
        echo '<br/>';
        //$consultaCEP->consultar('01001000');
    }
}
