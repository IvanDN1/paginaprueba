<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormController;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformativaController;
use Illuminate\Support\Facades\Mail;

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


/* rutas principales*/

Route::get('/', [InformativaController::class, 'welcome'])->name('home');
Route::view('/nosotros', [InformativaController::class, 'nosotros'])->name('nosotros');

Route::get('/contact', [ContactFormController::class, 'form'])->name('contact.form');
Route::post('send-form', [ContactFormController::class, 'send'])->name('contact.send');








/** rutas por carpeta cursos


Route::get('', [CursosController::class, ''])->name('');
Route::get('', [CursosController::class, ''])->name('');


 ruta carpeta usuario

Route::get('', [, ''])->name('');
Route::get('', [, ''])->name('');
Route::get('', [, ''])->name('');


 ruta carpeta usuario Admin

Route::get('', [, ''])->name('');
Route::get('', [, ''])->name('');
Route::get('', [, ''])->name('');

 ruta carpeta login

Route::get('', [, ''])->name('');
Route::get('', [, ''])->name('');
Route::get('', [, ''])->name('');

/*Route::get('/', function () {
    return view('welcome');
});
*/
