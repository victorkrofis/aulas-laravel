<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\contatoscontroller;
use App\Models\contatos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

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

//rota de update - metodo get
Route::get('/contatos/update/{contatoID}', [contatoscontroller::class, 'update'])->name('contatos.update.get');


//rota de update - metodo put
Route::put('/contatos/update/{contatoID}', [contatoscontroller::class, 'update'])->name('contatos.update.put');


//aaaaaaa
// rota usuarios
Route::get('/usuarios', [UsuariosController::class, 'index']) ->name('usuarios.index');

// rota delete de usuarios
Route::delete('/usuarios/{userId}', [UsuariosController::class, 'delete'])->name('usuarios.delete');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function(){
    return view('index');
});

//rota de create de usuarios - metodo get
Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create.get');

//rota de create de usuarios - metodo post
Route::post('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create.post');

//rota de update de usuarios - metodo get
Route::get('/usuarios/update/{userID}', [UsuariosController::class, 'update'])->name('usuarios.update.get');


//rota de update de usuarios - metodo put
Route::put('/usuarios/update/{userID}', [UsuariosController::class, 'update'])->name('usuarios.update.put');

Route::get('/index', function() {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
