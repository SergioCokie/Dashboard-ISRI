<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Rol;

Route::group(['middleware' => ['auth']], function () {
    Route::get('af/mayores/{id}/{id2}', [AuthenticatedSessionController::class, 'getMenus2'])->name('mayores');

    Route::get('af/catalogo1/{id}/{id2}', [AuthenticatedSessionController::class, 'getMenus2'])->name('catalogo1');

    Route::get('af/catalogo2/{id}/{id2}', [AuthenticatedSessionController::class, 'getMenus2'])->name('catalogo2');

    Route::get('af/catalogo3/{id}/{id2}', [AuthenticatedSessionController::class, 'getMenus2'])->name('catalogo3');

    Route::get('af/hijo1af/{id}/{id2}', [AuthenticatedSessionController::class, 'getMenus2'])->name('hijo1af');
});