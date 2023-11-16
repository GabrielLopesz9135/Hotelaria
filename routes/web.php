<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome');})->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); 

//Rotas para acessar registros de Quartos
Route::middleware('auth')->prefix('quartos')->group(function (){
    Route::get('/', [\App\Http\Controllers\QuartosController::class, 'listarDisponiveis'])->name('quartos.listarDisponiveis');
    Route::get('/data/{data}', [\App\Http\Controllers\QuartosController::class, 'quartosReservadosNaData'])->name('quartos.quartosReservadosNaData');
});

//Rotas para acessar registros de Reservas
Route::middleware('auth')->prefix('reservas')->group(function (){
    Route::get('/', [\App\Http\Controllers\ReservasController::class, 'show'])->name('reservas.show');
    Route::get('/cliente/{idCliente}', [\App\Http\Controllers\ReservasController::class, 'showByCliente'])->name('reservas.showByCliente');
});


