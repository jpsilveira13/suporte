<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;


class SiteController extends Controller
{
    public function sendEmailTest(){
        Mail::send('emails.teste', ['msg' => 'hello'], function ($message) {
            $message->from('naoresponder@suportecontainer.com.br', 'João Paulo');

            $message->to('samotinho@gmail.com', 'Pedro 2')->subject('My Test Email!');
        });


    }

    public function contato(Request $request){
        $userData = array(
            'nome' => $request->get('nome'),
            'email' => $request->get('email'),
            'telefone' => $request->get('telefone'),
            'mensagem' => $request->get('mensagem')
        );

        Mail::send('emails.contato',$userData,function($message) use ($userData){
            $message->from('naoresponder@suportecontainer.com.br', 'Suporte Container Locações & Venda');

            $message->to('comercial@suportecontainer.com.brs');
            $message->subject($userData['nome']. ', mandou uma mensagem para você. ');

        });


        return view('site.principal');
    }
}
