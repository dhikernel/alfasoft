<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listar', [ContactController::class, 'index'])->name('index.form');

Route::get('/contato', [ContactController::class, 'create'])->name('create.form');

Route::get('/detalhes/{id}', [ContactController::class, 'show'])->name('show.form');

Route::post('/cadastrar', [ContactController::class, 'store'])->name('store.form');

Route::get('/editar/{id}', [ContactController::class, 'edit'])->name('edit.form');

Route::put('/atualizar/{id}', [ContactController::class, 'update'])->name('update.form');

Route::delete('/deletar/{id}', [ContactController::class, 'destroy'])->name('destroy.form');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
