<?php
use Illuminate\Support\Facades\Route;


//Acceso publico
Route::get('/', function () {
    return redirect(route('login'));
});