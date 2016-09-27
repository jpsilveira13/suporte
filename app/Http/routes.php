<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('site.principal');
});


Route::get('contato',function (){
   return view('site.contato');
});


Route::get('sobre',function(){
    return view('site.sobre');
});

Route::get('servicos',function(){
   return view('site.servicos');
});

Route::get('diferenciais',function(){
   return view('site.diferenciais');
});

Route::get('equipamentos',function(){
    return view('site.equipamentos');
});