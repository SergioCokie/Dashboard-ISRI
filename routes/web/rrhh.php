<?php
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth','access']], function () {
    Route::get('rrhh/empleados', function () {
        return "Acceso menu gestion de empleados";
    });
    Route::get('rrhh/consultar', function () {
        return "Acceso menu consultar empleados";
    });
});