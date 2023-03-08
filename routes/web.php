<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('login');
});

Route::post('/', [AuthController::class, 'login']);



/*::GET -> ACCEDE AL MÉTODO GET*/

//INTERPOLACIÓN:
//''La comilla simple no evalua la cadena de texto, solo la interpreta, no imprime lo que dice la variable, solo el nombre de la variable
//""La comilla doble evalúa la cadena de texto (Si existen variables en la cadena) si imprime con lo que dice exactamente la variable (SOLO PASA EN PHP)
Route::get('newUser', function (){
    return view('new-user'); //kebab case
});