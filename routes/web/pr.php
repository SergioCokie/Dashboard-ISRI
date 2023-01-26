<?php
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth','access']], function () {
    Route::get('pr/paac', function () {
        return "Acceso menu gestion paac";
    });
});