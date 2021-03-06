<?php

use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\AtividadeController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Rotas do projeto
Route::resource('projetos', ProjetoController::class);
Route::resource('atividades', AtividadeController::class);
Route::get('atividades/create/{id}', [AtividadeController::class, 'create']);