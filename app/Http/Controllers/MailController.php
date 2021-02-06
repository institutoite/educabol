<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail(){
        $details=[
            'title' => 'Correo de prueba',
            'body' => 'Este es un ejemplo para enviar correo desde gmail'
        ];

        Mail::to('eduardcp20@gmail.com')->send(new TestMail($details));
        return "Correo Electronico enviado";
    }
}
