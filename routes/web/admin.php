<?php
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth','access']], function () {
    Route::get('accesoPrivado', function () {
        return "Acceso privado";
    });
});