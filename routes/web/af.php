<?php
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth','access']], function () {

    Route::get('af/mayores', function () {
        return "Acceso Menu Bienes Mayores";
    });
    Route::get('af/catalogo1', function () {
        return "Acceso Menu Catalogo 1";
    });
    Route::get('af/catalogo2', function () {
        return "Acceso Menu Catalogo 2";
    });
    Route::get('af/catalogo3', function () {
        return "Acceso Menu Catalogo 3";
    });
    Route::get('padre/hijo1', function () {
        return "Acceso Menu Hijo 1";
    });
});