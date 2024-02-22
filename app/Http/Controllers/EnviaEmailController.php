<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnviaEmailController extends Controller
{
    public function index(){
        $result = Mail::to('cnelias@gmail.com')->send(new SendMail('Mensagem de teste', 'Claudio'));

        return ($result) ? 'E-mail enviado' : 'Erro';
    }
}
