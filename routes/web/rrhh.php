<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



Route::group(['middleware' => ['auth']], function () {
    Route::get('rrhh/consulta/{id}/{id2}', [AuthenticatedSessionController::class, 'getMenus2'])->name('consulta.empleados');

    Route::get('rrhh/gestion/{id}/{id2}', [AuthenticatedSessionController::class, 'getMenus2'])->name('gestion.empleados');

});