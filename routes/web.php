<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformativaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [InformativaController::class, 'welcome'])->name('home');
Route::get('/contacto', [InformativaController::class, 'contacto'])->name('contacto');
Route::get('/mision', [InformativaController::class, 'mision'])->name('mision');
Route::get('/about', [InformativaController::class, 'about'])->name('about');
Route::get('/login', [InformativaController::class, 'login'])->name('login');

/*Route::get('/', function () {
    return view('welcome');
});*/
