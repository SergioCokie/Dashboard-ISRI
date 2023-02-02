<?php
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {
    Route::get('pr/gestion/{id}/{id2}', [AuthenticatedSessionController::class, 'getMenus2'])->name('gestion.paac');
});