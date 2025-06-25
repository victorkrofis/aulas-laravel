<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\contatoscontroller;
use App\Models\contatos;
use Illuminate\Support\Facades\Route;

// rota contatos
Route::get('/contatos', [contatoscontroller::class, 'index']) ->name('contatos.index');

// rota delete
Route::delete('/contatos/{contatosId}', [contatoscontroller::class, 'delete'])->name('contatos.delete');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function(){
    return view('index');
});

//rota de create - metodo get
Route::get('/contatos/create', [ContatosController::class, 'create'])->name('contatos.create.get');

//rota de create - metodo post
Route::post('/contatos/create', [ContatosController::class, 'create'])->name('contatos.create.post');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
