<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenos', function(){
    return 'essa é a pagina sobre nos';
});

Route::get('/home', function(){
    return 'esat é a pagina home';
});

Route::get('/cursos', function(){
    return 'esta é a pagina de cursos';
});

Route::get('/detalhescursos', function(){
    return 'esta é a pagina de detalhes do curso';
});

Route::get('/videoaula', function(){
    return ' esta é a pagina de video aula';
});

Route::get('/licoes', function(){
    return 'esta pagina de fazer as lições';
});

Route::get('/verificarcertificado', function(){
    return 'esta pagina verifica o seu certificado';
});

Route::get('/entrar', function(){
    return 'esta é a pagina de entrar';
});

Route::get('/cadastrar', function(){
    return 'esta é a pagina de cadastro';
});

Route::get('/recuperarsenha', function(){
    return 'esta é a pagina de recuperar senha';
});

Route::get('/editarperfil', function(){
    return 'aqui vocÊ edita o perfil';
});

Route::get('/novasenha', function(){
    return 'aqui vocÊ muda a senha';
});

Route::get('/perfil', function(){
    return 'aqui vocÊ ve o perfil';
});

Route::get('/meuscursos', function(){
    return 'aqui vocÊ ve seus cursos';
});