<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('dashboard/{id}', [AuthenticatedSessionController::class, 'getMenus'])
->middleware(['auth', 'verified'])->name('mainpage');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //RUTAS NUEVAS
    Route::get('/sistema1', [SistemaController::class, 'index'])->name('sistema1');

});

require __DIR__.'/web/auth.php';
require __DIR__.'/web/public.php';
require __DIR__.'/web/admin.php';
require __DIR__.'/web/rrhh.php';
require __DIR__.'/web/af.php';
require __DIR__.'/web/pr.php';