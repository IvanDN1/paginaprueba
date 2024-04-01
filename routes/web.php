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
Route::get('/cursos', [InformativaController::class, 'cursos'])->name('cursos');
Route::get('/nosotros', [InformativaController::class, 'nosotros'])->name('nosotros');
Route::get('/login', [InformativaController::class, 'login'])->name('login');

/*Route::get('/', function () {
    return view('welcome');
});*/
