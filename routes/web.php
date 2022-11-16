<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

// CRUD
Route::get('usuarios', [UsuariosController::class, 'index']);
Route::get('usuarios/novo', [UsuariosController::class, 'create']);
Route::post('usuarios/salvar', [UsuariosController::class, 'store']);
Route::get('usuarios/editar/{id}', [UsuariosController::class, 'edit']);
Route::get('usuarios/excluir/{id}', [UsuariosController::class, 'destroy']);
Route::post('usuarios/gravar/{id}', [UsuariosController::class, 'update']);
Route::get('usuarios/{id}', [UsuariosController::class, 'show']);


Route::get('home', [HomeController::class, 'index']);
Route::get('users', [HomeController::class, 'users']);

Route::get('/', function () {
    return view('welcome');
});
