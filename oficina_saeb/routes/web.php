
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\AgendamentoController;

// Login
Route::get('/', function () {
    return view('login');
});

Route::post('/entrar', [LoginController::class, 'entrar']);

// Páginas protegidas
Route::middleware('verificar.login')->group(function () {

    // Página inicial
    Route::get('/inicio', function () {
        return view('inicio');
    });

    // Logout
    Route::post('/sair', [LoginController::class, 'sair']);

    // Clientes
    Route::get('/clientes', [ClienteController::class, 'listar']);
    Route::get('/clientes/editar/{id}', [ClienteController::class, 'editar']);
    Route::post('/clientes/atualizar/{id}', [ClienteController::class, 'atualizar']);

    // Veículos
    Route::get('/veiculos', [VeiculoController::class, 'listar']);
    Route::post('/veiculos/cadastrar', [VeiculoController::class, 'cadastrar']);

    // Agendamentos
    Route::get('/agendamentos', [AgendamentoController::class, 'listar']);
    Route::get('/agendamentos/editar/{id}', [AgendamentoController::class, 'editar']);
    Route::post('/agendamentos/atualizar/{id}', [AgendamentoController::class, 'atualizar']);

});
